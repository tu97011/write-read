<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Zcommit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zcommit-form">

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

	<?= Html::activeHiddenInput($model,'zuowenid') ?>

<?php echo $form->field($model, 'rank')->dropDownList(['0' => '90~100分（优秀）', '1' => '80~90分（良好）', '2' => '70~80分（一般）', '3' => '60~70分（???）']); ?>

    <?= $form->field($model, 'commit')->textarea(['rows' => 6]) ?>

	<?= Html::activeHiddenInput($model,'create_time') ?>
	<?= Html::activeHiddenInput($model,'create_user_id') ?>
	<?= Html::activeHiddenInput($model,'update_time') ?>
	<?= Html::activeHiddenInput($model,'update_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
