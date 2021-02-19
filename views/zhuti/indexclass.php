<?php

use yii\helpers\Html;
use yii\widgets\ListView;

use models\Zhuti;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZhutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

switch($mid){
	case "0":
	$this->title="基础训练";
	break;
	case "1":
	$this->title="总有一处风景会让你心动";
	break;
	case "2":
	$this->title="编织出美丽的故事";
	break;	
	case "3":
	$this->title="写出生动的人物";
	break;	
	case "4":
	$this->title="走近自然，做科学的观察者和探索者";
	break;	
	case "5":
	$this->title="你的故事也很精彩";
	break;
		case "6":
	$this->title="幻想的天空";
	break;
		case "7":
	$this->title="怎样说才明白？";
	break;
		case "8":
	$this->title="在这里，留下读书的脚印吧";
	break;

}
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout = 'main7';
?>


<style>
.list-view{width:100%;}
.card_33{float:left;}
@media screen and (max-width: 1024px) {
.card_33{width:48%;}
</style>
<div class="site_index ">
<div class="card_100 flex_m">
<img src="image/indeximg/top2.jpg">
</div>
	<div class="index_item flex" >
    <?= ListView::widget([
        'dataProvider' => $dataProvider1,
        'itemOptions' => ['class' => 'card_33'],
        'itemView' => '_view',
    ]) ?>
    </div>

	
</div>