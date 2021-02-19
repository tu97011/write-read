<?php
use yii\helpers\html;
?>
<div class="neirong">
<div class="neirong_in">
<div class="neirong_in_number"><?=$model->id;?></div>
<div class="neirong_in_title"><?=Html::a($model->title,['view','id'=>$model->id]);?>
</div>
<div class="clear"></div>
</div>
</div>