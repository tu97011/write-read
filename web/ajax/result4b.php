<div id="result">
<?php
$vote = htmlspecialchars($_REQUEST['vote']);//接收来自浏览器发送的vote变量。

// 获取文件中存储的数据
$filename = "result.txt";//建立保存数据的文件变量
$content = file($filename);//从文件中获取内容。

// 将数据分割到数组中
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];


if ($vote == 0)
{
  $yes = $yes + 1;
  echo "<p>√</p>";
}

if ($vote == 1)
{
  $no = $no + 1;
  echo "<p>×</p>";
}
if($vote==2 and($yes+$no)!=0 and $yes!=0 and $no!=0)
{
	echo "<div class=\"rank\" style=\"background:green;width:".ceil($yes/($yes+$no)*100)."%\">T</div>";
	echo "<div class=\"rank\" style=\"background:red;width:".floor($no/($yes+$no)*100)."%\">F</div>";
	echo "<div id=\"rank\">答题总数：".($yes+$no)."&nbsp&nbsp|&nbsp&nbsp正确：".$yes."&nbsp&nbsp|&nbsp&nbsp错误：".$no."&nbsp&nbsp|&nbsp&nbsp总得分：".round(100*$yes/($yes+$no))."</div>";

	}else{if($yes!=0 and $no==0 and $vote==2){
		echo "<div class=\"rank\" style=\"background:green;width:".ceil($yes/($yes+$no)*100)."%\">T</div>";
		echo "<div id=\"rank\">答题总数：".($yes+$no)."&nbsp&nbsp|&nbsp&nbsp正确：".$yes."&nbsp&nbsp|&nbsp&nbsp错误：".$no."&nbsp&nbsp|&nbsp&nbsp总得分：".round(100*$yes/($yes+$no))."</div>";
	}elseif($no!=0 and $yes==0 and $vote==2){
		echo "<div class=\"rank\" style=\"background:red;width:".floor($no/($yes+$no)*100)."%\">F</div>";
		echo "<div id=\"rank\">答题总数：".($yes+$no)."&nbsp&nbsp|&nbsp&nbsp正确：".$yes."&nbsp&nbsp|&nbsp&nbsp错误：".$no."&nbsp&nbsp|&nbsp&nbsp总得分：".round(100*$yes/($yes+$no))."</div>";
		
	}
	}

if($vote==3)
{$yes=0;
 $no=0;
}
	

// 插入投票数据
$insertvote = $yes."||".$no;//定义数值
$fp = fopen($filename,"w");//打开文件
fputs($fp,$insertvote);//插入新的数值
fclose($fp);//关闭文件
?>
</div>







