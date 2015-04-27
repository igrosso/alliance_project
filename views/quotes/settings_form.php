<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Quotes */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Quote',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Quotes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'validateOnBlur'=>false,
        'validateOnChange'=>false
    ]); ?>
    <div class="question_sections">
        <?= $form->field($model, 'any_loses')->dropDownList(Yii::$app->params['quote']['yes_no']) ?>
        <div class="any_loss_block" style="display: none">
            some email credentials
        </div>
        <br />
        <?= $form->field($model, 'prior_underwriting')->dropDownList(Yii::$app->params['quote']['yes_no']) ?>
        <?= $form->field($model, 'prior_underwriting_details')->textInput() ?><br />
        <?= $form->field($model, 'half_mile_location')->dropDownList(Yii::$app->params['quote']['yes_no']) ?>
        <?= $form->field($model, 'quote_mile_location')->dropDownList(Yii::$app->params['quote']['yes_no']) ?>
    </div>
    <div style="margin-top: 15px;width: 30%">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Start Quoting') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-lg btn-success' : 'btn btn-lg btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<script>
    $('#quotes-any_loses').change(function(){
        if($(this).val()==1){
            $('.any_loss_block').show();
        } else {
            $('.any_loss_block').hide();
        }
    });
</script>