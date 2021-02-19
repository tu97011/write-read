<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\Myhomework;
?>
<style>

.name{width:20%;font-size:1.2em;}
.stars{width:15%;height:30px;font-size:1.2em;}
.ranks{width:20%;font-size:1.2em;}
.rankwall{width:96%;margin:0 2%;padding:20px;}


</style>


<div class="card_100 back_a ">


    <div class="index_head">
	  <img src="image/indeximg/head1.jpg"/>
	</div>

    <div class="body-content">
		
		<div class="card_100 flex_m minheight_100 fontsize_20">
		<p>读</p>
		</div>

        <div class="row_index">

            <div class="index_card ">
            <?=Html::a('<img src="image/math/app/notice.png"/>',['notice/index'],['class'=>'index_btn']);?> 
            </div>

			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/homework.png"/>',['homework/index'],['class'=>'index_btn']);?> 		
            </div>

			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/ipad.png"/>',['action/index'],['class'=>'index_btn']);?>    
            </div>

			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/test.png"/>',['test/index'],['class'=>'index_btn']);?>
            </div>			

			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/read.png"/>',['article/index'],['class'=>'index_btn']);?>    
		    </div>


			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/docs.png"/>',['doc1/index'],['class'=>'index_btn']);?>  
			</div>		

			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/mathselect.png"/>',['math4b/index'],['class'=>'index_btn']);?>    
		    </div>


			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/font.png"/>',['yuwenfont/index'],['class'=>'index_btn']);?>  
			</div>

			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/steps.png"/>',['mathfalsework/index'],['class'=>'index_btn']);?>  
			</div>
			
			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/ycard.png"/>',['yuwencard/index'],['class'=>'index_btn']);?>  
			</div>


			<div class="index_card ">
            <?=Html::a('<img src="image/math/app/scard.png"/>',['mathcard5a/index'],['class'=>'index_btn']);?>  
			</div>
			
			<div class="index_card back_cheng">
            <a href="">kong</a> 
			</div>
			

			

			

			
        </div>
		<div class="card_100 flex_m minheight_100 fontsize_20">
		<p>作家榜</p>
		</div>
		
		<div class="row_index">
			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('赵心悦',array('user/profile/show','id'=>6));?>
			</div>
			
			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('张欣妍',array('user/profile/show','id'=>7));?>
			</div>
			
			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('刘月',array('user/profile/show','id'=>8));?>
			</div>
			
			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('赵志森',array('user/profile/show','id'=>9));?>
			</div>
			
			
			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('马博宇',array('user/profile/show','id'=>10));?>
			</div>

			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('高诗文',array('user/profile/show','id'=>11));?>
			</div>
			
			
			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('杜欣悦',array('user/profile/show','id'=>12));?>
			</div>
			
			
			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('张欣怡',array('user/profile/show','id'=>13));?>
			</div>

			<div class="index_card fontsize_10 back_a flex_m">

			<?=Html::a('张成浩',array('user/profile/show','id'=>14));?>
			</div>
			
			<div class="index_card fontsize_10 back_a flex_m">	
			<?=Html::a('马志刚',array('user/profile/show','id'=>15));?>
			</div>
			
		
		</div>
		
		<div class="card_100 flex_m minheight_100 fontsize_20">
		<p>作业积分榜</p>
		</div>
		
		<div class="rankwall flex back_d radius_5" style="padding:15px;">
		<?php 
        $student=array('01zhaoxinyue'=>'赵欣悦','02zhangxinyan'=>'张欣妍','03liuyue'=>'刘月','04zhaozhisen'=>'赵志森','05maboyu'=>'马博宇','06gaoshiwen'=>'高诗雯',
			'07duxinyue'=>'杜欣悦','08zhangxinyi'=>'张欣怡','09zhangchenghao'=>'张成浩','10mazhigang'=>'马志刚');
		foreach($student as $username=>$name){
			$query5=Myhomework::find()->where(['username'=>$username,'rank'=>5]);
			$query4=Myhomework::find()->where(['username'=>$username,'rank'=>4]);
			$query3=Myhomework::find()->where(['username'=>$username,'rank'=>3]);
			$query2=Myhomework::find()->where(['username'=>$username,'rank'=>2]);
			$total=$query5->count()*5+$query4->count()*4+$query3->count()*3+$query2->count()*2;
		
			echo "<div class=\"name\">".$name."</div>";
			echo "<div class=\"stars\"><img src=\"image/icon/usershow/redstar_s.png\"/>".$query5->count()."</div>";
			echo "<div class=\"stars\"><img src=\"image/icon/usershow/orangestar_s.png\"/>".$query4->count()."</div>";
			echo "<div class=\"stars\"><img src=\"image/icon/usershow/yellowstar_s.png\"/>".$query3->count()."</div>";
			echo "<div class=\"stars\"><img src=\"image/icon/usershow/bad_s.png\"/>".$query2->count()."</div>";
			echo "<div class=\"ranks\">积分=".$total."</div>";

			
			
		}



		?>
				
		
		</div>

    </div>

</div>
