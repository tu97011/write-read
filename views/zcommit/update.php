<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zcommit */

$this->title = 'Update Zcommit: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zcommits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zcommit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
