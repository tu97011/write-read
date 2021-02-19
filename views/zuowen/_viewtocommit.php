<?php
use yii\helpers\html;
use dektrium\user\Models\User;
?>
<div class="flex">
<div style="width:15px;height:15px;background:#145b7d;margin:0px 15px;">
</div>
<div style="line-height:15px;color:#9d9087;">
	<?php 
		$query=User::find()->where(['id'=>$model->create_user_id ])->one();
		echo $query->username;
	?>
</div>
<div style="line-height:15px;color:#9d9087;padding-left:15px;">
<?php
switch($model->rank){
	case'0':echo '[ 评分：90-100 ]';
	break;
	case'1':echo '[ 评分：80-90 ]';
	break;
	case'2':echo '[ 评分：70-80 ]';
	break;
	case'3':echo '[ 评分：60-70 ]';
	break;
};
?>
</div>
</div>

<div class="card_100 fontsize_10 "style="padding-left:45px;">

<?=$model->commit;?>


</div>

