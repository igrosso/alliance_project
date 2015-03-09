<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 27.02.15
 * Time: 18:59
 */

namespace app\models;
use app\models\_base\BaseOptionalPropertyCoverages;


class OptionalPropertyCoverages extends BaseOptionalPropertyCoverages {



    private $deductible_bp;
    private $deductible_building;
    /**
     * relations
     */
    public function getQuote()
    {
        return $this->hasOne(Quotes::className(),['id' => 'quote_id']);
    }
    /**
     * relations
     */

    public function getDeductibleFactorBP(){
        if(!$this->deductible_bp){
            $this->deductible_bp = $this->quote->getDeductibleFactorBP();
            return $this->deductible_bp;
        }
        return $this->deductible_bp;
    }
    public function getDeductibleFactorBuilding(){
        if(!$this->deductible_building){
            $this->deductible_building = $this->quote->getDeductibleFactorBuilding();
            return $this->deductible_building;
        }
        return $this->deductible_building;
    }


    /**
     * @param $deductibleBP
     * @return float|int
     * get account receivable
     */
    public function getAccountsReceivableDeductible(){
        return $this->getDeductibleFactorBP();
    }
    public function getAccountsReceivablePremium(){
        $deductibleBP = $this->getAccountsReceivableDeductible();
        if(!empty($deductibleBP)){
            return round(($this->accounts_receivable/1000)*$deductibleBP*\Yii::$app->params['quote']['option_coverage_rates']['accounts'],0);
        } else {
            return 0;
        }
    }

    /**
     * @return float
     * get Additional Expense premium
     */
    public function getAdditionalExpensePremium(){
        return round(($this->additional_expense/1000)*\Yii::$app->params['quote']['option_coverage_rates']['additional'],0);
    }

    /**
     * @return int
     * get alcoholic beverages tax exclusion
     */
    public function getAlcoholicBeveragesTaxExclusion(){
        return (int)$this->alcoholic_beverages_tax_exclusion;
    }

    /**
     * @return int
     * get Building Inflation Protection premium
     */
    public function getBuildingInflationProtectionRate(){
        return (!empty($this->building_inflation_protection)&&!empty(\Yii::$app->params['quote']['building_inflation'][$this->building_inflation_protection]))?\Yii::$app->params['quote']['building_inflation'][$this->building_inflation_protection][1]:0;
    }
    public function getBuildingInflationProtection(){
        $quote = $this->quote;
        $rate = $this->getBuildingInflationProtectionRate();
        if($rate==0) return 0;
        $bldgPremium = $quote->getBldgComposite();
        if($bldgPremium==0) return 0;
        return round($rate*$bldgPremium,0);
    }


    public function getBusinessownersAgreedAmount(){
        return (int)$this->businessowners_agreed_amount;
    }

    /**
     * @return mixed
     * -------------------------------------------------------BusinessownersBurglaryRobbery------------------------
     */
    public function getBusinessownersBurglaryRobberyDeductible(){
        return $this->getDeductibleFactorBP();
    }

    public function getBusinessownersBurglaryRobberyPremium(){
        $bx3 = ($this->businessowners_burglary_robbery>5000)?5000:$this->businessowners_burglary_robbery;
        $bx4 = ($this->businessowners_burglary_robbery>15000)?10000:($this->businessowners_burglary_robbery-$bx3);
        $bx5 = ($this->businessowners_burglary_robbery>25000)?10000:($this->businessowners_burglary_robbery-($bx3+$bx4));
        $bx6 = ($this->businessowners_burglary_robbery>25000)?($this->businessowners_burglary_robbery-25000):0;
        $crimeGroup = $this->quote->occupancy?$this->quote->occupancy->crime_group:0;
        $bz3 = (!empty($crimeGroup))?\Yii::$app->params['quote']['burglary_robbery_cov'][0][$crimeGroup]:0;
        $bz4 = (!empty($crimeGroup))?\Yii::$app->params['quote']['burglary_robbery_cov'][1][$crimeGroup]:0;
        $bz5 = (!empty($crimeGroup))?\Yii::$app->params['quote']['burglary_robbery_cov'][2][$crimeGroup]:0;
        $bz6 = (!empty($crimeGroup))?\Yii::$app->params['quote']['burglary_robbery_cov'][3][$crimeGroup]:0;

        $premium = ($bx3/1000)*$bz3 + ($bx4/1000)*$bz4 + ($bx5/1000)*$bz5 + ($bx6/1000)*$bz6;
        $deductible = $this->getBusinessownersBurglaryRobberyDeductible();
        $terrMult = 0;
        if(in_array($this->quote->country,[30,40,44,52,60])){
            $terrMult = \Yii::$app->params['quote']['bop_burg_terr_mult'][0][2];
        } elseif(in_array($this->quote->country,[3,24,31,41,43])){
            $terrMult = \Yii::$app->params['quote']['bop_burg_terr_mult'][1][2];
        } else {
            $terrMult = \Yii::$app->params['quote']['bop_burg_terr_mult'][2][2];
        }
        return round($premium*$deductible*$terrMult,0);
    }
    /**-
     * ---------------------------------------------Businessowners Burglary Robbery premium---------------------
     */


    /**
     * @return mixed
     * ---------------------------------------------------cause of loss methods------------------------------------
     */
    public function getCauseOfLossBuildingLimit(){
        return $this->quote->building_amount_of_ins;
    }
    public function getCauseOfLossBPLimit(){
        return $this->quote->bus_amount_of_ins;
    }
    public function getCauseOfLossBuildingDeductible(){
        return $this->getDeductibleFactorBuilding();
    }
    public function getCauseOfLossBPDeductible(){
        return $this->getDeductibleFactorBP();
    }
    public function getCauseOfLossBuildingPremium(){
        $limit = $this->getCauseOfLossBuildingLimit();
        $deductible = $this->getCauseOfLossBuildingDeductible();
        $rate = 0;
        if(!empty($this->cause_of_loss_building)){
            $rate = \Yii::$app->params['quote']['building_cause_loss'][$this->cause_of_loss_building-1][2];
        }
        return round(($limit/100)*$deductible*$rate,0);
    }
    public function getCauseOfLossBPPremium(){
        $limit = $this->getCauseOfLossBPLimit();
        $deductible = $this->getCauseOfLossBPDeductible();
        $rate = 0;
        if(!empty($this->cause_of_loss_business_property)){
            $rate = \Yii::$app->params['quote']['business_property_cause_loss'][$this->cause_of_loss_business_property-1][2];
        }
        return round(($limit/100)*$deductible*$rate,0);
    }
    /**
     * ----------------------------------------------cause of loss methods---------------------------------------
     */

    /**
     * --------------------------------------------compute coverage---------------------------------------------
     */
    public function getComputerCoverageLimit(){
        return $this->computer_coverage;
    }
    public function getComputerCoverageRate(){
        return \Yii::$app->params['quote']['computer_coverage_rate'];
    }
    public function getComputerCoverageDeductible(){
    //=IF(AND(CI4<>"",CI4<>8,CI4<>0),VLOOKUP($'List Sheet'.$CI$4,$'List Sheet'.$AL$3:$AN$9,3,FALSE()),0)
        if(!empty($this->deductible)){
            if(!empty(\Yii::$app->params['quote']['deductible_factors'][$this->deductible-1])){
                return \Yii::$app->params['quote']['deductible_factors'][$this->deductible-1];
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
    public function getComputerCoveragePremium(){
        return round(($this->getComputerCoverageLimit()/1000)*$this->getComputerCoverageRate()*$this->getComputerCoverageDeductible(),0);
    }
    /**
     * ----------------------------------------computer coverage-------------------------------------
     */


    /**
     * -------------------------------------cooking protection-------------------------------------------
     */
    public function getCookingProtectionApplies(){
        if(!empty($this->cooking_protection_equip)){
            return true;
        } else {
            return false;
        }
    }

    public function getCookingProtectionInitialPremium(){
        if(!empty($this->cooking_protection_equip)){
            return \Yii::$app->params['quote']['cooking_protection_equip'];
        } else {
            return 0;
        }
    }

    public function getCookingProtectionInitialDeductible(){
        return $this->getDeductibleFactorBP();
    }

    public function  getCookingProtectionLimit(){
        return round($this->getCookingProtectionInitialPremium()*$this->getCookingProtectionInitialDeductible(),0);
    }
    // ----------------------------------cooking protection----------------------------------------------------


    /**
     * ---------------------------------Customers Goods--------------------------------------------------------
     */
    public function getCustomersGoodsLimit(){
        return $this->customers_goods;
    }
    public function getCustomersGoodsRate(){
        return $this->quote->getTableRateBP();
    }
    public function getCustomersGoodsDeductible(){
        return $this->getDeductibleFactorBP();
    }
    public function getCustomersGoodsPremium(){
        return round($this->getCustomersGoodsLimit()/100*$this->getCustomersGoodsRate()*$this->getCustomersGoodsDeductible(),0);
    }
    /**
     * ---------------------------------Customers Goods--------------------------------------------------------
     */


    public function getInsuredPremisesAPremium()
    {
        return round($this->getInsuredPremisesANo() * $this-> getInsuredPremisesARate() * $this->getInsuredPremisesABPPrem(), 0);
    }

    public function getInsuredPremisesANo()
    {
        // =IF(AND(EI6<>"";EI6<>11;EI6<>0);EI6;0)
        return !empty($this->insured_premises_a_ten) ? $this->insured_premises_a_ten : 0;
    }

    public function getInsuredPremisesARate()
    {
        return \Yii::$app->params['quote']['insured_premises_a_rate'];
    }

    public function getInsuredPremisesABPPrem()
    {
        return $this->quote->getBPComposite();
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function getInsuredPremisesPremium()
    {
        return round($this->getInsuredPremisesNo() * $this-> getInsuredPremisesRate() * $this->getInsuredPremisesBPPrem(), 0);
    }

    public function getInsuredPremisesNo()
    {
        // =IF(AND(EF6<>"";EF6<>11;EF6<>0);EF6;0)
        return !empty($this->insured_premises_ten) ? $this->insured_premises_ten : 0;
    }

    public function getInsuredPremisesRate()
    {
        return \Yii::$app->params['quote']['insured_premises_rate'];
    }

    public function getInsuredPremisesBPPrem()
    {
        return $this->quote->getBPComposite();
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function getValuablePapersPremium()
    {
        return round(($this->valuable_papers / 1000) * $this->getValuablePapersRate() * $this->getValuablePapersDed(), 0);
    }

    public function getValuablePapersRate() {
        return \Yii::$app->params['quote']['valuable_papers_rate'];
    }

    public function getValuablePapersDed() {
        return $this->quote->getDeductibleFactorBP();
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function getTenantImprovementsAPremium()
    {
        return round($this->getTenantImprovementsAXZ1() * $this->getTenantImprovementsAAgg(), 0);
    }

    public function getTenantImprovementsAAgg()
    {
        return $this->quote->getAggregateFactor();
    }

    public function getTenantImprovementsAXZ1()
    {
        return round($this->getTenantImprovementsAXZ2() * $this->getTenantImprovementsASpecialCond(), 0);
    }

    public function getTenantImprovementsAXZ2() {
        return round($this->getTenantImprovementsAXZ3() * $this->getTenantImprovementsADrCr(), 0);
    }

    public function getTenantImprovementsASpecialCond()
    {
        return $this->quote->getSpecialConditionsBuilding();
    }

    public function getTenantImprovementsAXZ3()
    {
        return round($this->getTenantImprovementsAXZ4() * $this->getTenantImprovementsADed(), 0);
    }

    public function getTenantImprovementsADrCr()
    {
        return $this->quote->getBuildingCredits();
    }

    public function getTenantImprovementsAXZ4()
    {
        return round(($this->getTenantImprovementsAXZ5() / 100) * $this->tenant_Improvements_a, 0);
    }

    public function getTenantImprovementsADed()
    {
        return $this->quote->getDeductibleFactorBuilding();
    }

    public function getTenantImprovementsAXZ5()
    {
        return round($this->getTenantImprovementsAXZ6() * $this->getTenantImprovementsALead(), 0);
    }

    public function getTenantImprovementsAXZ6()
    {
        return round($this->getTenantImprovementsTableARate() * $this->getTenantImprovementsAZone(), 0);
    }

    public function getTenantImprovementsALead()
    {
        return $this->quote->getLeadFactor();
    }

    public function getTenantImprovementsTableARate()
    {
        return isset(\Yii::$app->params['quote']['rate_table'][$this->getTenantImprovementsCombinationCode()]) ? \Yii::$app->params['quote']['rate_table'][$this->getTenantImprovementsCombinationCode()][$this->quote->getRateTableKey()] : null;
    }

    public function getTenantImprovementsAZone()
    {
        return $this->quote->getBuildingZoneFactor();
    }

    public function getTenantImprovementsCombinationCode()
    {
        // =CONCATENATE($'List Sheet'.O2;$'List Sheet'.C2;A2;2;A7;$'List Sheet'.G2;A6;A5)

        $quote = $this->quote;

        $construction = $quote->construction == 3 ? 2 : $quote->construction; // A2
        $quote_occupancy_mer_serc1 = $quote->occupancy->mer_serc > 5 ? 9 : 1; // A7
        $quote_occupancy_mer_serc2 = $quote->occupancy->mer_serc > 5 ? ($quote->occupancy->mer_serc == 8 ? $quote->occupied_type : 9) : $quote->occupied_type; // A6
        $quote_occupancy_mer_serc3 = $quote->occupancy->mer_serc == 1 ? $quote->occupancy->bldg_rg : 9; //A5

        return \Yii::$app->excel->concat([
            $quote->prior_since,
            $quote->zone,
            $construction,
            2,
            $quote_occupancy_mer_serc1,
            $quote->occupancy->mer_serc,
            $quote_occupancy_mer_serc2,
            $quote_occupancy_mer_serc3
        ]);
    }

    // -----------------------------------------------------------------------------------------------------------------


} 