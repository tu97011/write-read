<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5b */

$this->title = '新建语文学习单';
$this->params['breadcrumbs'][] = ['label' => 'Yuwen5bs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
