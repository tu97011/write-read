<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5bSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yuwen5b-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lesson') ?>


    <?= $form->field($model, 'readmap') ?>

    <?= $form->field($model, 'daodu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		<?= Html::a('新建主题', ['create'], ['class' => 'btn btn-success btn_normal']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
