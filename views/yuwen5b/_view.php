<?php
use yii\helpers\html;

use app\models\Zuowen;
?>
<style>

@media screen and (max-width: 1024px) {
.card_33{width:100%;}
}
</style>
<div class="shadow_3 radius_5 ">
<div class="card_100 flex_m  fontsize_12 back_a" style="color:#000;">
 <?=Html::a($model->lesson,['view','id'=>$model->id]);?>
</div>
<div class="card_100 mh_200 fontsize_10 ">
<?=$model->daodu;?>



</div>

</div>

