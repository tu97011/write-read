<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Zhuti */

$this->title = '发布一个写作主题';
$this->params['breadcrumbs'][] = ['label' => 'Zhutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>