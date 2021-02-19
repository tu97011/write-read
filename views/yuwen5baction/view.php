<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5baction */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yuwen5bactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index">

	<div class="card_100 shadow_3">
    <h3><?= Html::encode($model->title); ?></h3>
	</div> 
	<div class="card_100 shadow_3">
    <h3><?=$model->content; ?></h3>
	</div>	
	
	
<?php if(Yii::$app->user->identity){
		echo"<div class=\"card_100 flex_m\">";}else{echo"<div>";}
	?>

	<?php 
	//管理员可以可见更新，删除，等操作按钮。发布者也可以更新删除。需要增加发布时间，用户id，更新时间，更新id。
	if (Yii::$app->user->isGuest){echo"";}else{
	if (Yii::$app->user->identity->id==2||Yii::$app->user->identity->id==$model->create_user_id){
		echo Html::a('返回',['yuwen5b/view','id'=>$model->yuwen5bid],['class'=>'btn btn-primary btn_normal']);
		echo Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn_normal ']) ;
        echo Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn_normal ',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
	]);


	}else{echo "";}
	}
	?>

	</div>	
	
	
	
	
	
	
	

</div>
