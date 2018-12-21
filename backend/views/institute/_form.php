<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Institute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'institute_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institute_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institute_account_no')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
