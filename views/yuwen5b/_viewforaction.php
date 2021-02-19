<?php
use yii\helpers\html;
?>
<div class="card_100 back_c  ">
<div>
    <?=Html::a($model->title,['yuwen5baction/view','id'=>$model->id]);?>
</div>
<div>	
	<?=$model->content;?>
</div>
</div>

