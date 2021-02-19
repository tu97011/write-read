<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '活动';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site_index">

    <div class="headimg">

	<?php echo "<img src=\"image/actionimg/head".rand(1,4).".jpg\">";?>

	</div>
    <div class="index_item" >
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => '_view',
    ]) ?>
    </div>
	
    <div class="index_search" >	
	    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if(Yii::$app->user->isGuest){echo "";}
		else{if(Yii::$app->user->identity->id==2){echo Html::a('发布新的活动', ['create'], ['class' => 'btn btn-success']);}
		else{echo "";} }?>
    </p>
    </div>
</div>