<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5baction */

$this->title = 'Update Yuwen5baction: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yuwen5bactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yuwen5baction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
