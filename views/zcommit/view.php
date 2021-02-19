<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Zcommit */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zcommits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index_900">

	<div class="card_100_a shadow_3">
	
	<div class="card_100_a fontsize_15">
	<?php switch($model->rank){
		case '0':echo '90~100（优秀）';
		break;
				case '1':echo '80~90（良好）';
		break;
				case '2':echo '70~80（一般）';
		break;
				case '3':echo '60~70（？？？）';
		break;
		
		
	};
	?>
	</div>

	
	<div class="card_100_a fontsize_15">
	<?=$model->commit;?>
	</div>
	
</div>
	
	
	<?php if(Yii::$app->user->identity){
		echo"<div class=\"card_100 flex_m\">";}else{echo"<div>";}
	?>

	<?php 
	//管理员可以可见更新，删除，等操作按钮。发布者也可以更新删除。需要增加发布时间，用户id，更新时间，更新id。
	if (Yii::$app->user->isGuest){echo"";}else{
	if (Yii::$app->user->identity->id==2||Yii::$app->user->identity->id==$model->create_user_id){
		echo Html::a('返回作文',['zuowen/view','id'=>$model->zuowenid],['class' => 'btn btn-primary btn_normal ']);
		echo Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn_normal ']) ;
        echo Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn_normal ',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
	]);
	}else{echo Html::a('返回作文',['zuowen/view','id'=>$model->zuowenid],['class' => 'btn btn-primary btn_normal ']);}
	}
	?>


	</div>

</div>
