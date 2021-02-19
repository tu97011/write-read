<?php

use yii\helpers\Html;
use yii\widgets\ListView;

use models\Article;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
switch($mid){
	case "0":
	$this->title="人物";
	break;
		case "1":
	$this->title="风景";
	break;
		case "2":
	$this->title="故事";
	break;	case "3":
	$this->title="自然";
	break;	case "4":
	$this->title="名著";
	break;	case "5":
	$this->title="科学";
	break;
}
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
.list-view{width:100%;}
.card_33{float:left;}
@media screen and (max-width: 1024px) {
.card_33{width:48%;}
}
</style>
<div class="site_index ">
	<div class="card_100 flex_m back_a radius_3">
	<?=$this->title;?>
	</div>

	<div class="index_item flex " >
    <?= ListView::widget([
        'dataProvider' => $dataProvider1,
        'itemOptions' => ['class' => 'card_33'],
        'itemView' => '_view',
    ]) ?>
    </div>
	<div class="card_100 flex_m ">
	<p>
        <?= Html::a('创建文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	</div>

</div>



