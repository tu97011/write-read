<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\action */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="action-view">

<div class="test_content"> 
    <h1><?= Html::encode($this->title) ?></h1>   
</div>
<div class="test_content"> 
    <?= $model->plan?>
</div>
<div class="test_content"> 
       <?= $model->content?>
</div>
<div class="test_content"> 
    <?= $model->headimg?>   
</div>

<div class="test_content"> 
    <p>
	<?php 
	if (Yii::$app->user->isGuest){echo"";}else{
	if (Yii::$app->user->identity->id==2){
		echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary math-btn']) ;
        echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger math-btn',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
	]);
		echo Html::a('Create',['create'],['class'=>'btn btn-danger math-btn']);
	}else{echo "";}
	}
	?>
    </p>

</div>

</div>
