<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5baction */

$this->title = '新建任务';
$this->params['breadcrumbs'][] = ['label' => 'Yuwen5bactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
