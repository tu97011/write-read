<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zuowen */

$this->title = 'Update Zuowen: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Zuowens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site_index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
