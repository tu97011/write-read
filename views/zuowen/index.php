<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZuowenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '作文';
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
<div class="site_index ">
<div class="card_100 flex_m">
<img src="image/indeximg/top2.jpg">
</div>
	<div class="index_item flex" >
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'card_33'],
        'itemView' => '_view',
    ]) ?>
    </div>

	<?php echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
