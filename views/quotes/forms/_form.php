<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Countries;
use app\models\Occupancy;
use app\models\MedicalPayments;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Quotes */
/* @var $form yii\widgets\ActiveForm */
?>
<br />
<div class="quotes-form">
    <table class="table table-striped table-bordered">
        <tr><td><?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?></td></tr>
        <tr><td><?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?></td></tr>
        <tr><td><?= $form->field($model, 'zip_code')->textInput(['maxlength' => 255]) ?></td></tr>
        <tr><td><?= $form->field($model, 'agent')->textInput(['maxlength' => 255]) ?></td></tr>
        <tr><td><?= $form->field($model, 'construction')->dropDownList(Yii::$app->params['quote']['construction'], ['prompt'=>'Select']) ?></td></tr>
        <tr><td><?= $form->field($model, 'protection')->dropDownList(Yii::$app->params['quote']['protection']) ?></td></tr>
        <tr><td><?= $form->field($model, 'country')->textInput()->dropDownList(ArrayHelper::map(Countries::find()->all(), 'id', 'name'),['prompt'=>'Select']) ?></td></tr>
        <tr><td><?= $form->field($model, 'zone')->dropDownList(Yii::$app->params['quote']['zone']) ?></td></tr>
        <tr><td><?= $form->field($model, 'prior_since')->dropDownList(Yii::$app->params['quote']['prior_since']) ?></td></tr>
        <tr>
	        <td>
			        <div class="occupancy_block locationsDropDownListBlock">
				    <?php
				    $clergypersons = null;
				    $clergypersons_liability = null;
				    if(!empty($model->locationsQuotes)) {
					    foreach ($model->locationsQuotes as $locationQuote) {
						    $location = $locationQuote->location;
						    $model->location = $location->id;
						    $clergypersons =$locationQuote->clergypersons;
						    $clergypersons_liability =$locationQuote->clergypersons_liability;
					    }
				    }
				    echo $form->field($model, 'location')->dropDownList(ArrayHelper::map(Occupancy::find()->orderBy('name')->all(), 'id', 'name'),['prompt'=>'Select','class'=>'form-control locationsDropDownList']);
				    if($model->location==2){
					        echo '<div  class="textInputValue">Clergy Persons<br /><input type="text" value="'.$clergypersons.'" name="clergypersons"><br />
						        Clergyperson Profesional Legal Liability Coverage<br />'.Html::dropDownList('clergypersons_liability',$clergypersons_liability,Yii::$app->params['quote']['clergypersons'],['prompt'=>'Select','class'=>'form-control']).'
						        </div>';
				    }
				    echo '<br />';
				    ?>
		        </div>
            </td>
        </tr>
        <tr><td><?= $form->field($model, 'occupied_type')->radioList(Yii::$app->params['quote']['occupied_type']) ?></td></tr>
        <tr><td><?= $form->field($model, 'policy_type')->radioList(Yii::$app->params['quote']['policy_type']) ?></td></tr>
        <tr><td><?= $form->field($model, 'deductible_bldg')->dropDownList(Yii::$app->params['quote']['deductible']) ?></td></tr>
        <tr><td><?= $form->field($model, 'deductible_bp')->dropDownList(Yii::$app->params['quote']['deductible']) ?></td></tr>
        <tr><td><?= $form->field($model, 'building_rc_acv')->dropDownList(Yii::$app->params['quote']['building_rc_acv']) ?></td></tr>
        <tr><td><?= $form->field($model, 'business_property_rc_acv')->dropDownList(Yii::$app->params['quote']['business_property_rc_acv']) ?></td></tr>
        <tr><td><?= $form->field($model, 'mercantile_occupany_in_bldg')->dropDownList(Yii::$app->params['quote']['yes_no']) ?></td></tr>
        <tr><td><?= $form->field($model, 'does_lead_exclusion_apply')->dropDownList(Yii::$app->params['quote']['yes_no']) ?></td></tr>
        <tr><td><?= $form->field($model, 'operated_by_insured')->dropDownList(Yii::$app->params['quote']['yes_no']) ?></td></tr>
        <tr><td><?= $form->field($model, 'apt_in_bldg')->dropDownList(Yii::$app->params['quote']['no_yes']) ?></td></tr>
        <tr><td><?= $form->field($model, 'sole_occupancy')->dropDownList(Yii::$app->params['quote']['yes_no']) ?></td></tr>
        <tr><td><?= $form->field($model, 'consumed_on_premises')->dropDownList(Yii::$app->params['quote']['yes_no']) ?></td></tr>
        <tr><td><?= $form->field($model, 'building_amount_of_ins')->textInput(['maxlength' => 255]) ?></td></tr>
        <tr><td><?= $form->field($model, 'bus_amount_of_ins')->textInput(['maxlength' => 255]) ?></td></tr>
        <tr><td><?= $form->field($model, 'prop_damage')->dropDownList(Yii::$app->params['quote']['prop_damage']) ?></td></tr>
        <tr><td><?= $form->field($model, 'agregate')->dropDownList(Yii::$app->params['quote']['agregate']) ?></td></tr>
        <tr><td><?= $form->field($model, 'med_payment')->dropDownList(ArrayHelper::map(MedicalPayments::find()->all(), 'id', 'name'),['prompt'=>'Select'])?></td></tr>
	    <tr><td>
			    <?= $form->field($model, 'special_events')->dropDownList(Yii::$app->params['quote']['special_events']['days']) ?>
			    <?= $form->field($model, 'special_events_liability')->dropDownList(Yii::$app->params['quote']['liability']) ?>
		</td></tr>

    </table>
</div>
<script>
    $(document).ready(function(){
        var checkOccupancySkinCare = function(){
            if($('#quotes-location').val()==15||$('#quotes-location').val()==16){
                $('#optionalliabilitycoverages-certain_skin_care_service').prop('checked',true).prop('disabled',true);
            } else {
                $('#optionalliabilitycoverages-certain_skin_care_service').prop('disabled',true);
            }
        }
        var checkOccupancyHoddAndDuct = function(){
            var obj = $('#quotes-location').val();
            if(obj==9||obj==11||obj==31||obj==42||obj==78||obj==97){
                $('#specialconditions-hood_and_duct').prop('checked',true).prop('disabled',true);
            } else {
                $('#specialconditions-hood_and_duct').prop('disabled',false);
            }
        }

	    var checkLs46 = function(){
		    var obj = $('#quotes-location').val();
		    if(obj==51){
			    $('.ls46-field').show();
		    } else {
			    $('.ls46-field').hide();
		    }
	    };
        checkOccupancySkinCare();
        checkOccupancyHoddAndDuct();
	    checkLs46();
        $('#quotes-location').change(function(){
            checkOccupancySkinCare();
            checkOccupancyHoddAndDuct();
	        checkLs46();
        });
	    $('body').on('change','.locationsDropDownList',function(){
		   $(this).parents('div.locationsDropDownListBlock').find('.textInputValue').each(function(index,el){
			    el.remove()
		    });
		    if($(this).val()==2){
			    var text = $('.clergypersons_input').html();
			    $(this).parents('div.locationsDropDownListBlock').append(text);
		    }
	    })
    });
</script>