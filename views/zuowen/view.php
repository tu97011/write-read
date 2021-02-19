<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use app\models\Zcommit;
use dektrium\user\Models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Zuowen */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Zuowens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index_900">


	
	<div class="card_100_a back_b flex_m">
    <h4><?= Html::encode($this->title) ?></h4>
	</div>

	
	<div class="card_100 fontsize_15 ">
	<?=$model->content;?>
	</div>
	
	<div class="card_100 ">
    <p>发布时间：<?= $model->create_time?></p>
	<?php 
		$query=User::find()->where(['id'=>$model->create_user_id ])->one();
		echo "作者：".$query->username;
	?>
	</div>
	
	<h4 style="padding-left:15px;font-size:1.5em;">评价</h4>
	<?php

		$query = Zcommit::find()->where(['zuowenid' => $model->id]);//1.建立数据库查询，指定模型和查询条件。

		$provider = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 15,
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
			'itemView' => '_viewtocommit',
			//'itemOptions' => ['class' => 'item'],
			//'itemView' => function ($model, $key, $index, $widget) {
			 //   return Html::a(Html::encode($model->name), ['resource/view', 'id' => $model->id]);
		   // },
		]) ?>
	
	
	<?php if(Yii::$app->user->identity){
		echo"<div class=\"card_100 flex_m\">";}else{echo"<div>";}
	?>

	<?php 
	//管理员可以可见更新，删除，等操作按钮。发布者也可以更新删除。需要增加发布时间，用户id，更新时间，更新id。
	if (Yii::$app->user->isGuest){echo"";}else{
	if (Yii::$app->user->identity->id==2||Yii::$app->user->identity->id==$model->create_user_id){
		echo Html::a('评论',['zcommit/create','zuowenid'=>$model->id],['class'=>'btn btn-primary btn_normal']);
		echo Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn_normal ']) ;
        echo Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn_normal ',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
	]);
	}else{echo Html::a('评论',['zcommit/create','zuowenid'=>$model->id],['class'=>'btn btn-primary btn_normal']);}
	}
	?>


	</div>

</div>
