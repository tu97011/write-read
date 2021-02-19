<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use app\models\Yuwen5baction;

/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5b */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yuwen5bs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site_index_900">
	<div class="card_100_a back_a">
    <h3><?= Html::encode($model->lesson); ?></h3>
	</div>
	
	<div class="card_100_a fontsize_12 ">
	<h3>导读：</h3>
	<?=$model->daodu;?>
	</div>
	
	<div class="card_100_a fontsize_12 ">
	<h3>积累：</h3>
	<?=$model->jilei;?>
	</div>
	
	<div class="card_100_a fontsize_12 ">
	<h3>运用：</h3>
	<?=$model->yingyong;?>
	</div>
	
	<div class="card_100_a fontsize_12 ">
	<h3>思考：</h3>
	<?=$model->sikao;?>
	</div>

	

	

	
	<div class="card_100_a fontsize_12 ">
	<h3>任务：</h3>
    <div>
	<?php 
	$query=Yuwen5baction::find()->where(['yuwen5bid'=>$model->id]);
	$provider=new ActiveDataProvider([
	'query'=>$query,
	'pagination'=>['pagesize'=>20],	
	]);
	
	echo Listview::widget([
	'dataProvider'=>$provider,
	'itemOptions'=>['class'=>'item'],
	'itemView'=>'_viewforaction'
	]);	
	?>	
	</div>
    <?php if (Yii::$app->user->isGuest){echo"";}else{
		echo Html::a('发布学习任务',['yuwen5baction/create','yuwen5bid'=>$model->id],['class'=>'btn btn-primary']);
	}
	?>
	</div>
	
	<div class="card_100_a fontsize_12 ">
	<h3>备课笔记：</h3>
	<?=$model->readmap;?>
	</div>
	
	<?php if(Yii::$app->user->identity){
		echo"<div class=\"card_100_a flex_m\">";}else{echo"<div>";}
	?>

	<?php 
	//管理员可以可见更新，删除，等操作按钮。发布者也可以更新删除。需要增加发布时间，用户id，更新时间，更新id。
	if (Yii::$app->user->isGuest){echo"";}else{
	if (Yii::$app->user->identity->id==2){
		echo Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn_normal ']) ;
        echo Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn_normal ',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
	]);
		echo Html::a('创建',['create'],['class'=>'btn  btn_normal btn-default']);
	}else{echo "";}
	}
	?>

	</div>

</div>
