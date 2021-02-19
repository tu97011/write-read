<?php
use yii\helpers\html;
use dektrium\user\Models\User;
?>
<div class="card_100 fontsize_12 flex">
<div>
<?=Html::a($model->title,['zuowen/view','id'=>$model->id]);?>
</div>
<div>
	<?php 
		$query=User::find()->where(['id'=>$model->create_user_id ])->one();
		echo '|'.$query->username;
	?>
</div>


</div>

