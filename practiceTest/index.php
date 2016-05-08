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

		a {
			text-decoration:none;
			display: block;
			height:30px;
			line-height:30px;
			width:120px;
			background-color:#eeeeee;
			text-align:center;
			color:black;
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
	session_start();
    include("test.txt");

    $current = 1;

    if(isset($_SESSION["current"])) 
    {
        $current = $_SESSION["current"];
    }
    else if($_SESSION["current"] == "")
    {
        $_SESSION["current"] = 1;
    }

    if(isset($_SESSION["no" . $current]))
    {
        $answer1 = $_SESSION["no" . $current];
    }
    else
    {
        $answer1 = "null";
    }

    if(isset($_SESSION["no" . ($current + 1)]))
    {
        $answer2 = $_SESSION["no" . ($current + 1)];
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
		//print question1
		echo "<h4>".$current.".".$test[$current]['subject']."</h4>";

		//print selection
		for($i = 'A'; $i <= 'D'; $i++)
		{
			echo "<p>";
			echo "<input type='radio' name='choose1' value='A' onchange='addAnswer()'>";
			echo $i.".";
			echo $test[$current][$i];
			echo "</p>";
		}

		$current++;

		//print question2
		echo "<h4>".$current.".".$test[$current]['subject']."</h4>";

		//print selection
		for($i = 'A'; $i <= 'D'; $i++)
		{
			echo "<p>";
			echo "<input type='radio' name='choose1' value='A' onchange='addAnswer()'>";
			echo $i.".";
			echo $test[$current][$i];
			echo "</p>";
		}
	?>

	<div>
		<ul>
			<li>
				<div style='margin:10px 0px 5px 10px;'>
					<?php
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
						if($current < count($test))
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
	var_dump($_SESSION);
?>

<br><br>

</body>
</html>