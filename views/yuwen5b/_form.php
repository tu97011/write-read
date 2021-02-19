<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yuwen5b */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site_index">

    <?php $form = ActiveForm::begin(); ?>
	<h3>● 课题</h3>
    <?= $form->field($model, 'lesson')->textInput(['maxlength' => true]) ?>
	

	<h3>● 导读</h3>
	<?php echo $form->field($model,'daodu')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        'initialFrameHeight' => '200',
        'lang' =>'en', //中文为 zh-cn
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', 'source','|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','blockquote', 'attachment','link' ,'indent',
            ],
        ]
        ]	
	]);?>	
	<h3>● 积累</h3>	
		<?php echo $form->field($model,'jilei')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        'initialFrameHeight' => '250',
        'lang' =>'en', //中文为 zh-cn
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', 'source','|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','blockquote', 'attachment','link' ,'indent',
            ],
        ]
        ]	
	]);?>
	<h3>● 应用</h3>	
		<?php echo $form->field($model,'yingyong')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        'initialFrameHeight' => '250',
        'lang' =>'en', //中文为 zh-cn
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', 'source','|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','blockquote', 'attachment','link' ,'indent',
            ],
        ]
        ]	
	]);?>
	<h3>● 思考</h3>	
		<?php echo $form->field($model,'sikao')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        'initialFrameHeight' => '250',
        'lang' =>'en', //中文为 zh-cn
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', 'source','|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','blockquote', 'attachment','link' ,'indent',
            ],
        ]
        ]	
	]);?>
	
	<h3>● 拓展·背景</h3>		

	<?php echo $form->field($model,'readmap')->widget('kucha\ueditor\UEditor',[
	'clientOptions' => [
        'initialFrameHeight' => '600',
        'lang' =>'en', //中文为 zh-cn
        'toolbars' => [
            [
                'fullscreen','undo', 'redo', 'source','|',
                'bold', 'italic', 'underline',  'removeformat','insertunorderedlist','simpleupload','fontsize','forecolor','emotion','blockquote', 'attachment','link' ,'indent',
            ],
        ]
        ]	
	]);?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
