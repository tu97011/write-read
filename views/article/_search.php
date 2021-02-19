<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<style>

</style>

<div class="article-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //$form->field($model, 'id') ?>

    <?php //$form->field($model, 'class') ?>

    <?php // $form->field($model, 'title') ?>

    <?= $form->field($model, 'content') ?>

    <?php // $form->field($model, 'excise') ?>

    <?php // echo $form->field($model, 'daodu') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'word') ?>

<div class="flex_m">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary btn_normal']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default btn_normal']) ?>
        <?= Html::a('新建文章', ['create'], ['class' => 'btn btn-success btn_normal']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
