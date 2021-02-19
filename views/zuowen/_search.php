<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZuowenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zuowen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'create_user_id') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_user_id') ?>

    <?php // echo $form->field($model, 'update_time') ?>

<div class="flex_m">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary btn_normal']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default btn_normal']) ?>

</div>

    <?php ActiveForm::end(); ?>

</div>
