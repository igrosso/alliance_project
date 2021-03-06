<?php

namespace app\controllers;

use Yii;
use app\models\Quotes;
use yii\base\Exception;
use yii\filters\AccessControl;
use app\models\SpecialConditions;
use app\models\OptionalLiabilityCoverages;
use app\models\OptionalPropertyCoverages;
use app\models\search\QuotesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;
use yii\widgets\ActiveForm;
use yii\web\Response;


/**
 * QuotesController implements the CRUD actions for Quotes model.
 */
class QuotesController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['myquotes','myunfinishedquotes','view','create','delete','update','generate','irpm', 'cancel'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['finished','unfinished'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Quotes models.
     * @return mixed
     * role admin actions
     */
    public function actionFinished()
    {
        $searchModel = new QuotesSearch();
        $searchModel->status = $searchModel::FINISHED;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('finished_admin', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUnfinished()
    {
        $searchModel = new QuotesSearch();
        $searchModel->status = [$searchModel::UNFINISHED,$searchModel::NEW_QUOTE];
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('unfinished_admin', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Quotes models.
     * @return mixed
     * role user actions
     */
    public function actionMyquotes()
    {
        $searchModel = new QuotesSearch();
        $searchModel->status = $searchModel::FINISHED;
        $dataProvider = $searchModel->search_by_user(Yii::$app->request->queryParams,Yii::$app->user->id);

        return $this->render('finished', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionMyunfinishedquotes()
    {
        $searchModel = new QuotesSearch();
        $searchModel->status = [$searchModel::UNFINISHED,$searchModel::NEW_QUOTE];
        $dataProvider = $searchModel->search_by_user(Yii::$app->request->queryParams,Yii::$app->user->id);

        return $this->render('unfinished', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Quotes model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
	    $models = Quotes::findAll(['multiple_locations_index'=>$model->multiple_locations_index,'status'=>[Quotes::FINISHED,Quotes::UNFINISHED]]);
        $model->getTotalResults();
        return $this->render('generate_results', [
            'model' => $model,
	        'models'=> $models
        ]);
    }

    /**
     * Creates a new Quotes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        date_default_timezone_set('Etc/GMT-4');
        $model      = new Quotes();
        $model->setScenario('settings');
        $this->performAjaxValidation([$model]);
        if ($model->load(Yii::$app->request->post())) {
            $model->date_create = date('Y-m-d H:i:s');
            $model->date_quoted = date('Y-m-d H:i:s');
            $model->user_id = Yii::$app->user->id;
            $model->status = Quotes::NEW_QUOTE;
            if($model->save()){
                $sc = new SpecialConditions();
                $lc = new OptionalLiabilityCoverages();
                $pc = new OptionalPropertyCoverages();
                $sc->quote_id = $model->id;
                $lc->quote_id = $model->id;
                $pc->quote_id = $model->id;
                $sc->save(false);$lc->save(false);$pc->save(false);
                Yii::$app->session->setFlash("Quote-saved", Yii::t("app", "Begin quoiting."));
                return $this->redirect(['update', 'id' => $model->id]);
            } else {
                return $this->render('settings_form', [
                    'model' => $model
                ]);
            }
        } else {
            return $this->render('settings_form', [
                'model' => $model
            ]);
        }
    }

    /**
     * Updates an existing Quotes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        date_default_timezone_set('Etc/GMT-4');
        $model = $this->findModel($id);
	    $models = Quotes::findAll(['multiple_locations_index'=>$model->multiple_locations_index]);
        $model->setScenario('default');
        if($model->status == Quotes::FINISHED && !Yii::$app->user->identity->role->can_admin){
            throw new \yii\web\HttpException(404);
        }
        $model->date_quoted = date('Y-m-d H:i:s');
        $liability  = $model->liabilityCoverages;
        if(!$liability){
            $liability  = new OptionalLiabilityCoverages();
            $liability->quote_id = $model->id;
        }
        $property = $model->propertyCoverages;
        if(!$property){
            $property   = new OptionalPropertyCoverages();
            $property->quote_id = $model->id;
        }
        $conditions   = $model->specialConditions;
        if(!$conditions){
            $conditions = new SpecialConditions();
            $conditions->quote_id = $model->id;
        }
        $this->performAjaxValidation([$model,$liability,$property,$conditions]);
        if ($model->load(Yii::$app->request->post()) && $liability->load(Yii::$app->request->post())&&$conditions->load(Yii::$app->request->post())&&$property->load(Yii::$app->request->post())&&$model->validate()&&$liability->validate()&&$conditions->validate()&&$property->validate()) {
            $model->save();
            $liability->save();
            $conditions->save();
            $property->save();

            Yii::$app->session->setFlash("Quote-saved", Yii::t("app", "Quote was saved."));
	        if($this->needGenerateNewQuote()) {
		        return $this->redirect(['irpm', 'id' => $model->id,'add_location'=>1]);
	        }
            return $this->redirect(['irpm', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model'      => $model,
                'liability'  => $liability,
                'conditions' => $conditions,
                'property'   => $property,
	            'models'     => $models
            ]);
        }
    }

	private function  needGenerateNewQuote(){
		if(!empty($_REQUEST['add_location'])){
			return true;
		}
		return false;
	}
	private function generateNewQuote($obj){
		$model = new Quotes();
		$model->setScenario('settings');
		$model->any_loses = $obj->any_loses;
		$model->prior_underwriting = $obj->prior_underwriting;
		$model->prior_underwriting_details = $obj->prior_underwriting_details;
		$model->half_mile_location = $obj->half_mile_location;
		$model->quote_mile_location = $obj->quote_mile_location;
		$model->date_create = date('Y-m-d H:i:s');
		$model->date_quoted = date('Y-m-d H:i:s');
		$model->user_id = Yii::$app->user->id;
		$model->status = Quotes::NEW_QUOTE;
		$model->multiple_locations_index = $obj->multiple_locations_index;
		if($model->save()) {
			$sc = new SpecialConditions();
			$lc = new OptionalLiabilityCoverages();
			$pc = new OptionalPropertyCoverages();
			$sc->quote_id = $model->id;
			$lc->quote_id = $model->id;
			$pc->quote_id = $model->id;
			$sc->save(false);
			$lc->save(false);
			$pc->save(false);
			return $model;
		} else {
			return false;
		}
	}

    public function actionIrpm($id){
        $model = $this->findModel($id);
        if($model->needIRPM()){
            $model->setScenario('irpm');
            $this->performAjaxValidation([$model]);
            if($model->load(Yii::$app->request->post())){
                if($model->save()){
                    if($model->status == Quotes::FINISHED){
                        $this->generate($this->findModel($model->id));
                    }
                    Yii::$app->session->setFlash("Quote-saved", Yii::t("app", "IRPM for Quote was saved."));
	                if($this->needGenerateNewQuote()){
		                $newModel = $this->generateNewQuote($model);
		                if($newModel)
		                return $this->redirect(['update', 'id' => $newModel->id]);
	                }
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else {
                return $this->render('irpm',['model'=>$model]);
            }
        } else {
            if($model->status == Quotes::FINISHED){
                $this->generate($this->findModel($model->id));
            }
	        if($this->needGenerateNewQuote()){
		        $newModel = $this->generateNewQuote($model);
		        if($newModel)
			        return $this->redirect(['update', 'id' => $newModel->id]);
	        }
            return $this->redirect(['view', 'id' => $model->id]);
        }


    }

    public function generate($model){
        $path = Yii::getAlias('@app/web/storage/'.date('Y-m',strtotime($model->date_create)));
        if(!is_dir($path)){
            mkdir($path,0777,true);
        }
	    $index = $model->multiple_locations_index;
	    $models = Quotes::findAll(['multiple_locations_index'=>$index,'status'=>Quotes::FINISHED]);
        $pdf = $path.DIRECTORY_SEPARATOR.$model->multiple_locations_index.'.pdf';
        $xls = $path.DIRECTORY_SEPARATOR.$model->multiple_locations_index.'.xls';
        $content = $this->renderPartial('generate_results_pdf',['models'=>$models]);
        $this->generatePdf($content,$pdf,$model->name);
        $content = $this->renderPartial('generate_results_xls',['models'=>$models]);
        $this->generateExcel($content,$xls);
        $this->sendMail($model);
	    $url = '/storage/'.date('Y-m',strtotime($model->date_create));
	    \Yii::$app->db->createCommand("UPDATE `bop_rater_entry` SET file_path='$url' WHERE status=:status")
		    ->bindValue(':status', Quotes::FINISHED)
		    ->execute();
    }

    public function sendMail($model){

	    $index = $model->multiple_locations_index;
       // $user = $model->user->name;
        $name = $model->name;
        $date = date('Y-m-d');
        $user = '';
        $emails = [Yii::$app->params["adminEmail"]];
        if($model->user&&$model->user->profile){
           $user = $model->user->profile->full_name;
            $emails[] = $model->user->email;
        }

        // modify view path to module views
        $mailer           = Yii::$app->mailer;
        $oldViewPath      = $mailer->viewPath;
        $mailer->viewPath = Yii::$app->getModule("user")->emailViewPath;

        // send email
        $subject = Yii::$app->id . " - " . Yii::t("app", "New Quote");
        $message  = $mailer->compose('quote_finish', compact("name", "date", 'user'))
            ->setTo($emails)
            ->setSubject($subject);

        $message->attach(Yii::getAlias('@app/web/storage/'.date('Y-m',strtotime($model->date_create))).DIRECTORY_SEPARATOR.$index.'.pdf');
        $message->attach(Yii::getAlias('@app/web/storage/'.date('Y-m',strtotime($model->date_create))).DIRECTORY_SEPARATOR.$index.'.xls');
        // check for messageConfig before sending (for backwards-compatible purposes)
        if (empty($mailer->messageConfig["from"])) {
            $message->setFrom(Yii::$app->params["adminEmail"]);
        }

        $result = $message->send();
        // restore view path and return result
        $mailer->viewPath = $oldViewPath;
        return $result;
    }

    /**
     * Deletes an existing Quotes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        if(Yii::$app->user->identity->role->can_admin){
            return $this->redirect(['unfinished']);
        } else {
            return $this->redirect(['myunfinished']);
        }

    }

    /**
     * Finds the Quotes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Quotes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (($model = Quotes::findOne($id)) !== null) {
            if(Yii::$app->user->identity->role->can_admin||$model->user_id==Yii::$app->user->id){
                return $model;
            }
            throw new \yii\web\ForbiddenHttpException(404);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function generatePdf($content,$path,$title){
        $pdf = new Pdf([
            'mode' => Pdf::MODE_CORE,
            'format' => Pdf::FORMAT_A4,
            'orientation' => Pdf::ORIENT_PORTRAIT,
            'destination' => Pdf::DEST_FILE,
            'content' => $content,
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            'cssInline' => '.kv-heading-1{font-size:18px}',
            'options' => ['title' => $title],
            'filename'=>$path,
            'methods' => [
                'SetHeader'=>[$title],
                'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }

    public function generateExcel($html,$file){
        libxml_use_internal_errors(true); // fix problem with "&" - http://stackoverflow.com/questions/14648442/domdocumentloadhtml-warning-htmlparseentityref-no-name-in-entity
        $htmlPhpExcel = new \Ticketpark\HtmlPhpExcel\HtmlPhpExcel($html);
        $htmlPhpExcel->process()->save($file);
    }

    /**
     * @param $models
     * @return array
     * ajax validations
     */
    public function performAjaxValidation($models){
        $results = [];
        if(Yii::$app->request->isAjax ){
            foreach ($models as $model) {
                if ($model->load(Yii::$app->request->post())) {
                    $result = ActiveForm::validate($model);
                    if(!empty($result)){

                        $results = array_merge($results,$result);
                    }
                }
            }
            if(!empty($results)){
                \Yii::$app->response->format = Response::FORMAT_JSON;
                echo json_encode($results);
            } else {
                echo '[]';
            }
            \Yii::$app->end();
        }
    }

    public function actionCancel() {
        Yii::$app->session->setFlash('Quote-error', 'You can\'t continue this quote. Please contact to administrator.');
        return $this->redirect(['unfinished']);
    }
}
