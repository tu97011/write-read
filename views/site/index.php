<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Html;

use app\models\Zhuti;
use app\models\Zuowen;
?>
<style>

.name{width:20%;font-size:1.2em;}
.stars{width:15%;height:30px;font-size:1.2em;}
.ranks{width:20%;font-size:1.2em;}
.rankwall{width:96%;margin:0 2%;padding:20px;}

.navbar{margin-bottom:0px;background:#eee;"}

</style>
<div class="card_top flex_m back_e ">
<img src="image/indeximg/top1.png">
</div>

<div class="site_index ">



    <div class="index_head flex ">
	<div class="card_100 flex_m">
	徜徉在在文字的花园里，发现你未曾见过的风景
	</div>
	  <div class="card_33_n  shadow_3  fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/renwu.jpg">',array('article/indexclass','mid'=>0));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('人物·人生',array('article/indexclass','mid'=>0)); ?>
		</div>
	  </div>
	  
	  <div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/fengjing.jpg">',array('article/indexclass','mid'=>1));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('美丽风景',array('article/indexclass','mid'=>1)); ?>
		</div>
	  </div>	
	  
	  <div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/gushi.jpg">',array('article/indexclass','mid'=>2));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('听听故事',array('article/indexclass','mid'=>2)); ?>
		</div>
	  </div>	

	  <div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/ziran.jpg">',array('article/indexclass','mid'=>3));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('自然密码',array('article/indexclass','mid'=>3)); ?>
		</div>
	  </div>
	  
	  <div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/mingzhu.jpg">',array('article/indexclass','mid'=>4));?>
		<div class="item_100 flex_m">
		<?php echo Html::a('名著时空',array('article/indexclass','mid'=>4)); ?>
		</div>
	  </div>	
	  
	  <div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/kexue.jpg">',array('article/indexclass','mid'=>5));?>
		<div class="item_100 flex_m">
		<?php echo Html::a('科学力量',array('article/indexclass','mid'=>5)); ?>
		</div>
	  </div>

	  
	</div>
	
	    <div class="index_head flex ">
	<div class="card_100  flex_m">
	在一个阳光明媚的日子，用文字建造你自己的花园
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/jichu.jpg">',array('zhuti/indexclass','mid'=>0));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('从基础开始',array('zhuti/indexclass','mid'=>0)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'0']);
		echo "作文数:".$query->count();?>
		</div>
		</div>		
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/fengjing2.jpg">',array('zhuti/indexclass','mid'=>1));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('描绘心中风景',array('zhuti/indexclass','mid'=>1)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'1']);
		echo "作文数:".$query->count();?>
		</div>
		</div>		
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/gushi2.jpg">',array('zhuti/indexclass','mid'=>2));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('编织美丽故事',array('zhuti/indexclass','mid'=>2)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'2']);
		echo "作文数:".$query->count();?>
		</div>
		</div>		
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	<?php echo Html::a('<img src="image/indeximg/renwu2.jpg">',array('zhuti/indexclass','mid'=>3));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('写出人物',array('zhuti/indexclass','mid'=>3)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'3']);
		echo "作文数:".$query->count();?>
		</div>
		</div>		
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/kexue2.jpg">',array('zhuti/indexclass','mid'=>4));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('科学观察者',array('zhuti/indexclass','mid'=>4)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'4']);
		echo "作文数:".$query->count();?>
		</div>
		</div>
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/zhenshigushi.jpg">',array('zhuti/indexclass','mid'=>5));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('真实故事',array('zhuti/indexclass','mid'=>5)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'5']);
		echo "作文数:".$query->count();?>
		</div>
		</div>
	</div>
	
		<div class="card_33_n shadow_3 fontsize_12">
	<?php echo Html::a('<img src="image/indeximg/qihuan.jpg">',array('zhuti/indexclass','mid'=>6));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('自由奇想',array('zhuti/indexclass','mid'=>6)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'6']);
		echo "作文数:".$query->count();?>
		</div>
		</div>
		
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/shuoming.jpg">',array('zhuti/indexclass','mid'=>7));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('说明和应用',array('zhuti/indexclass','mid'=>7)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'7']);


		echo "作文数:".$query->count();?>
		</div>
		</div>
		
	</div>
	
	<div class="card_33_n shadow_3 fontsize_12">
	    <?php echo Html::a('<img src="image/indeximg/dushu.jpg">',array('zhuti/indexclass','mid'=>8));?>
		<div class=" item_100 flex_m">
		<?php echo Html::a('读书的印迹',array('zhuti/indexclass','mid'=>8)); ?>
		</div>
		
		<div class=" item_100 flex_m">
		<div class="radius_5 flex_m" style="width:140px;margin:5px;border:1px solid #eee;color:#c6c6c6;">
		<?php 
		$query=Zuowen::find()->where(['class'=>'8']);


		echo "作文数:". $query->count();?>
		</div>
		</div>
	</div>
	
	<div class="card_100  flex_m">
	<?php echo Html::a('部编语文五年级下',array('yuwen5b/index')); ?>
	</div>


		
		


    </div>

</div>
