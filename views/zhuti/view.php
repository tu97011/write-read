<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use app\models\Zuowen;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\Zhuti */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Zhutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index_900">
	<div class="card_100 back_c shadow_3">
    <h1><?= Html::encode($this->title) ?></h1>
	</div>

	<div class="card_100 fontsize_15 shadow_3">
	
	<?=$model->content;?>
	</div>
	
	<div class="card_100 fontsize_12 shadow_3">
	<h3>写作提示</h3>
	<?=$model->zhidao;?>
	</div>
	
	<div class="card_100 fontsize_12 shadow_3">
	<h3>写作素材</h3>
	<?=$model->sucai;?>
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
		echo Html::a('创建作文',['zuowen/create','zhuti_id'=>$model->id,'class'=>$model->class],['class'=>'btn  btn_normal btn-default']);
	}else{echo Html::a('创建作文',['zuowen/create','zhuti_id'=>$model->id,'class'=>$model->class],['class'=>'btn  btn_normal btn-default']);}
	}
	?>

	</div>
	<div>
	
	<?php

		$query = Zuowen::find()->where(['zhuti_id' => $model->id]);//1.建立数据库查询，指定模型和查询条件。

		$provider = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 20,
		],
		'sort' => [//设定排序规则。
			'defaultOrder' => [

				'create_time' => SORT_DESC,
			]
		],
		]);	
		echo ListView::widget([//调用ListView方法，渲染列表。
			'dataProvider' => $provider,
			'itemOptions' => ['class' => 'item'],
			'itemView' => '_viewtozuowen',
			//'itemOptions' => ['class' => 'item'],
			//'itemView' => function ($model, $key, $index, $widget) {
			 //   return Html::a(Html::encode($model->name), ['resource/view', 'id' => $model->id]);
		   // },
		]) ?>
	
	
	</div>

</div>
