<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="site_index">
<div class="article-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
	$datetime = new \DateTime;

    if ($model->isNewRecord){if(!Yii::$app->user->isGuest){
    $model->create_time=$model->update_time=$datetime->format('Y-m-d');
    $model->create_user_id=$model-> update_user_id=Yii::$app->user->identity->id;
    }}else{
    $model->update_time=$datetime->format('Y-m-d');
    $model->update_user_id=Yii::$app->user->identity->id;
    }
	?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?php echo $form->field($model,'content')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        'initialFrameHeight' => '600',
        'lang' =>'en', 
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', 'source','|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','blockquote', 'attachment','link' ,'indent',
            ],
        ]
	]	
	]);?>
	
	<?php echo $form->field($model,'excise')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        //编辑区域大小
        'initialFrameHeight' => '300',
        //设置语言
        'lang' =>'en', //中文为 zh-cn
        //定制菜单
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', '|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion',
            ],
        ]
	]	
	]);?>
	
	<?php echo $form->field($model,'word')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        //编辑区域大小
        'initialFrameHeight' => '200',
        //设置语言
        'lang' =>'en', //中文为 zh-cn
        //定制菜单
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', '|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','link' ,'indent',
            ],
        ]
	]	
	]);?>
	
		<?php echo $form->field($model,'daodu')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        //编辑区域大小
        'initialFrameHeight' => '200',
        //设置语言
        'lang' =>'en', //中文为 zh-cn
        //定制菜单
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', '|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','link' ,'indent',
            ],
        ]
	]	
	]);?>

	
	
			
	<?= $form->field($model, 'level')->dropDownList(['0'=>'三级（五六年级）','1'=>'二级（三四年级）','2'=>'一级（一二年级）']) ?>
				

    <?=$form->field($model, 'class')->dropDownList(['0' => '人物', '1' => '风景', '2' => '故事','3' => '自然', '4' => '名著', '5' => '科学']); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
	<?= Html::activeHiddenInput($model,'create_time') ?>
	<?= Html::activeHiddenInput($model,'create_user_id') ?>
	<?= Html::activeHiddenInput($model,'update_time') ?>
	<?= Html::activeHiddenInput($model,'update_user_id') ?>

    <?php ActiveForm::end(); ?>

</div>
</div>