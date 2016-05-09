<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Test</title>

	<style>
		ul {
			list-style-type:none;
			margin: 0px;
			padding:0px;
			width:610px;
		}

		li {
			float:left;
			margin-left:1px;
			margin-right: 1px;
		}

	</style>

</head>

<body>

<script type = "text/javascript">

function checkAnswer()
{
	form1.submit();
}

</script>

<?php
	
	session_start();//开启SESSION

	include("test.txt");//导入text.txt

	$current = 1;//$current变量记录当前页面的值，值为该页面第一题的题号

	//$current变量默认值是1，点击下一页时改变该值
	if(isset($_SESSION["current"])) 
    	{
        	$current = $_SESSION["current"];
    	}
	else
	{
		$_SESSION["current"] = 1;
	}
	
	//分别记录两道题目的答案
    	if(isset($_SESSION["no".$current]))
    	{
    		$answer1 = $_SESSION["no".$current];
   	}
    	else
    	{
        	$answer1 = "null";
    	}

    	if(isset($_SESSION["no".($current + 1)]))
    	{
        	$answer2 = $_SESSION["no".($current + 1)];
    	}
	else
	{
		$answer2 = "null";
	}
?>

<form 
	action = 'check.php'
	method = 'post'
	name = 'form1'>
	
	<?php
		//打印问题1
		echo "<h4>".$current.".".$test[$current]['subject']."</h4>";

		//打印选项
		for($i = 'A'; $i <= 'D'; $i++)
		{
			echo "<p>";
			//打印radiobutton
			echo "<input type='radio' name='choose1' value='" . $i . "' onchange='checkAnswer()'";
			if($answer1 == $i) 
			{
				echo "checked='checked'";//如果某项被选中，则勾选该项
			}
			echo ">";
			//打印选项的内容，如“A.php老师是刘音”
			echo $i.".";
			echo $test[$current][$i];

			echo "</p>";
		}

		//打印问题2
		echo "<h4>".($current+1).".".$test[$current+1]['subject']."</h4>";

		for($i = 'A'; $i <= 'D'; $i++)
		{
			echo "<p>";
			echo "<input type='radio' name='choose2' value='" . $i . "' onchange='checkAnswer()'";
			if($answer2 == $i) 
            		{
                		echo "checked='checked'";
            		}
            		echo ">";
			echo $i.".";
			echo $test[$current+1][$i];
			echo "</p>";
		}
	?>

	<?php
		$transmit = $_SESSION["current"];
	?>
	<div>
		<ul>
			<li>
				<div style='margin:10px 0px 5px 10px;'>
					<?php
						//上一页按钮						
						if($current > 2)
						{
							
							echo "<input type='submit' name='last' value='last'>";
						}
						else
						{
							echo " ";
						}
					?>
				</div>
			</li>
			<li>
				<div style='margin:10px 0px 5px 10px;'>
					<?php
						//下一页按钮						
						if($current + 1< count($test))
						{
							echo "<input type='submit' name='next' value='next'>";
						}
						else
						{
							echo " ";
						}
					?>
				</div>
			</li>
		</ul>
	</div>

</form>

<br><br>

<?php 
	//输出$_SESSION数组里的内容	
	var_dump($_SESSION);
?>

<br><br>

</body>
</html>
