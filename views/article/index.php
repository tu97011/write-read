<?php

use yii\helpers\Html;
use yii\widgets\ListView;

use app\models\Article;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout = 'main7';
?>
<style>
.list-view{width:100%;}
.card_33{float:left;}
@media screen and (max-width: 1024px) {
.card_33{width:48%;}
}
</style>
<div class="card_top mh_150 back_e flex_m">
<img src="image/indeximg/top12.jpg">
</div>
<div class="site_index ">

<div class="card_100 " style="float:left;">
<h3 class="flex_m">人物·人生</h3>


		<?php

		$query = Article::find()->where(['class' =>0]);//1.建立数据库查询，指定模型和查询条件。

		$provider1 = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 48,
		],
		'sort' => [//设定排序规则。
			'defaultOrder' => [

				'id' => SORT_ASC,
				//倒序
			]
		],
		]);	
		echo ListView::widget([//调用ListView方法，渲染列表。
			'dataProvider' => $provider1,
			'itemOptions' => ['class' => 'card_33'],
			'itemView' => '_view',
			//'itemOptions' => ['class' => 'item'],
			//'itemView' => function ($model, $key, $index, $widget) {
			 //   return Html::a(Html::encode($model->name), ['resource/view', 'id' => $model->id]);
		   // },
		]) ?>

</div>	


<div class="card_100  " style="float:left;">
<h3 class="flex_m">风景·地理</h2>


		<?php

		$query = Article::find()->where(['class' =>1]);//1.建立数据库查询，指定模型和查询条件。

		$provider1 = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 48,
		],
		'sort' => [//设定排序规则。
			'defaultOrder' => [

				'id' => SORT_ASC,
				//倒序
			]
		],
		]);	
		echo ListView::widget([//调用ListView方法，渲染列表。
			'dataProvider' => $provider1,
			'itemOptions' => ['class' => 'card_33'],
			'itemView' => '_view',

		]) ?>

</div>

<div class="card_100  " style="float:left;">
<h3 class="flex_m">记事·故事</h2>


		<?php

		$query = Article::find()->where(['class' =>2]);//1.建立数据库查询，指定模型和查询条件。

		$provider1 = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 48,
		],
		'sort' => [//设定排序规则。
			'defaultOrder' => [

				'id' => SORT_ASC,
				//倒序
			]
		],
		]);	
		echo ListView::widget([//调用ListView方法，渲染列表。
			'dataProvider' => $provider1,
			'itemOptions' => ['class' => 'card_33'],
			'itemView' => '_view',

		]) ?>

</div>

<div class="card_100  " style="float:left;">
<h3 class="flex_m">自然密码</h2>


		<?php

		$query = Article::find()->where(['class' =>3]);//1.建立数据库查询，指定模型和查询条件。

		$provider1 = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 48,
		],
		'sort' => [//设定排序规则。
			'defaultOrder' => [

				'id' => SORT_ASC,
				//倒序
			]
		],
		]);	
		echo ListView::widget([//调用ListView方法，渲染列表。
			'dataProvider' => $provider1,
			'itemOptions' => ['class' => 'card_33'],
			'itemView' => '_view',

		]) ?>

</div>

<div class="card_100  " style="float:left;">
<h3 class="flex_m">名著之旅</h2>


		<?php

		$query = Article::find()->where(['class' =>4]);//1.建立数据库查询，指定模型和查询条件。

		$provider1 = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 48,
		],
		'sort' => [//设定排序规则。
			'defaultOrder' => [

				'id' => SORT_ASC,
				//倒序
			]
		],
		]);	
		echo ListView::widget([//调用ListView方法，渲染列表。
			'dataProvider' => $provider1,
			'itemOptions' => ['class' => 'card_33'],
			'itemView' => '_view',

		]) ?>

</div>

<div class="card_100  " style="float:left;">
<h3 class="flex_m">科学力量</h2>


		<?php

		$query = Article::find()->where(['class' =>5]);//1.建立数据库查询，指定模型和查询条件。

		$provider1 = new ActiveDataProvider([//设定provider。在需求页面头部引用。
		'query' => $query,//使用数据库查询结果
		'pagination' => [//设置分页数量，格式为数组
			'pageSize' => 48,
		],
		'sort' => [//设定排序规则。
			'defaultOrder' => [

				'id' => SORT_ASC,
				//倒序
			]
		],
		]);	
		echo ListView::widget([//调用ListView方法，渲染列表。
			'dataProvider' => $provider1,
			'itemOptions' => ['class' => 'card_33'],
			'itemView' => '_view',

		]) ?>

</div>


<div class="clear"></div>
	
	

	<?php echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
