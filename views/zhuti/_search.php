<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZhutiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zhuti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //$form->field($model, 'id') ?>

    <?php //$form->field($model, 'class') ?>

    <?php //$form->field($model, 'title') ?>

    <?= $form->field($model, 'content') ?>

    <?php //$form->field($model, 'zhidao') ?>

    <?php // echo $form->field($model, 'sucai') ?>

<div class="flex_m">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary btn_normal']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default btn_normal']) ?>
        <?= Html::a('新建主题', ['create'], ['class' => 'btn btn-success btn_normal']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
