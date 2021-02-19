<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title=$model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site_index_900">
	<div class="card_100_a shadow_3 flex_m ">
    <h3><?= Html::encode($this->title) ?></h3>
	</div>

	<div class="card_100" style="color:#fcaf17;fontsize:1.2em; ">
	<h3>导读和思考：</h3>
	<?=$model->daodu;?>
	</div>
	
	<div class="card_100 back_a fontsize_15 ">
	<?=$model->content;?>
	</div>
	
	<div class="card_100 fontsize_12 shadow_3">
	<h3>思考和练习：</h3>
	<?=$model->excise;?>
	</div>
	
	<div class="card_100 fontsize_15 shadow_3">
	<h3>词语表</h3>
	<?=$model->word;?>
	</div>
	<?php if(Yii::$app->user->identity){
		echo"<div class=\"card_100 flex_m\">";}else{echo"<div>";}
	?>

	<?php 
	//管理员可以可见更新，删除，等操作按钮。发布者也可以更新删除。需要增加发布时间，用户id，更新时间，更新id。
	if (Yii::$app->user->isGuest){echo"";}else{
	if (Yii::$app->user->identity->id==2||Yii::$app->user->identity->id==$model->create_user_id){
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
