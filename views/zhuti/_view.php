<?php
use yii\helpers\html;

use app\models\Zuowen;
?>
<style>

@media screen and (max-width: 1024px) {
.card_50{width:100%;}
}
</style>
<div class="mh_200 shadow_3 radius_5 ">
<div class="flex_m mh_100 fontsize_12 back_a" style="color:#000;">
 <?=Html::a($model->title,['view','id'=>$model->id]);?>
</div>
<div class="card_100 flex fontsize_10 "style="color:#c9c9c9;">
<div class="card_50">
类别：
<?php
switch($model->class){
	case "0":echo "基础";break;
	case "1":echo "风景自然";break;
	case "2":echo "虚构写作";break;
	case "3":echo "人物";break;
	case "4":echo "科学";break;
	case "5":echo "非虚构";break;
	case "6":echo "想象作文";break;
	case "7":echo "说明应用";break;
	case "8":echo "读书笔记";break;
	
}
?>
</div>
<div class="card_50">
<?php 
$query=Zuowen::find()->where(['zhuti_id'=>$model->id]);


echo "数量:".$query->count();
?>
</div>


</div>

</div>

