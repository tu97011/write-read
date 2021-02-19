<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5baction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site_index">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
	$datetime = new \DateTime;

    if ($model->isNewRecord){if(!Yii::$app->user->isGuest){
    $model->create_time=$model->update_time=$datetime->format('Y-m-d');
    $model->create_user_id=$model-> update_user_id=Yii::$app->user->identity->id;
    }}else{
    $model->update_time=$datetime->format('Y-m-d');
    $model->update_user_id=Yii::$app->user->identity->id;
    }
	?>


	<?=Html::activeHiddenInput($model,'yuwen5bid')?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?php echo $form->field($model,'content')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        'initialFrameHeight' => '600',
        'lang' =>'en', 
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', 'source','|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','blockquote', 'attachment','link' ,'indent',
            ],
        ]
	]	
	]);?>

	<?= Html::activeHiddenInput($model,'create_time') ?>
	<?= Html::activeHiddenInput($model,'create_user_id') ?>
	<?= Html::activeHiddenInput($model,'update_time') ?>
	<?= Html::activeHiddenInput($model,'update_user_id') ?>

    <?= $form->field($model, 'class')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
