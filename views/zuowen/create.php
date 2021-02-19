<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Zuowen */

$this->title = '发布新文章';
$this->params['breadcrumbs'][] = ['label' => 'Zuowens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
