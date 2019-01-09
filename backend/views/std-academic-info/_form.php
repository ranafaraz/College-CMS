<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\StdPersonalInfo;
use common\models\StdClassName;

/* @var $this yii\web\View */
/* @var $model common\models\StdAcademicInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="std-academic-info-form">

    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'std_id')->dropDownList(
                    ArrayHelper::map(StdPersonalInfo::find()->where(['delete_status'=>1])->all(),'std_id','std_name'),
                    ['prompt'=>'']
                )?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'class_name_id')->dropDownList(
                    ArrayHelper::map(StdClassName::find()->where(['delete_status'=>1])->all(),'class_name_id','class_name'),
                    ['prompt'=>'']
                )?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'previous_class')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                 <?= $form->field($model, 'passing_year')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'total_marks')->textInput(['id'=>'totalMarks']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'obtained_marks')->textInput(['id'=>'obtainedMarks']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'percentage')->textInput(['id'=>'percentage']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'grades')->dropDownList([ 'A+' => 'A+', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', ], ['prompt' => '']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'Institute')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
       



  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
<script type="text/javascript">
$('#obtainedMarks').on('change',function(){
   var totalMarks = $('#totalMarks').val();
   var obtainedMarks = $('#obtainedMarks').val();
   var percentage = ((parseInt(obtainedMarks) / parseInt(totalMarks))*100);
   $('#percentage').val(percentage);
});
</script>