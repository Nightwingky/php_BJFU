<!DOCTYPE html>
<html>
<head>
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
			display: block;
			height:30px;
			line-height:30px;
			text-align:center;
			color:black;
			margin-left:5px;
			margin-right:5px;
		}

		.timeCountContainer
		{
			align:right;
			border:1px solid black;
			height:30px;
			width:100px;
		}

		.questionContainer
		{
			height:500px;
			width:1000px;
			margin:0 auto;
			border:1px solid red;
		}

		.page
		{
			height:30px;
			width:235px;
			margin:0 auto;
			border:1px solid blue;
		}

	</style>


</head>
<body>

<?php
	session_start();//start the session
	include("test.txt");

	$totalPage = count($test) / 2;//count the number of pages
?>

<script type = "text/javascript">
	function checkAnswer(name, value)
	{
		var httpRequest=new XMLHttpRequest();
  		httpRequest.open("GET","checkOnePage.php?number="+name+"&value="+value);
  		httpRequest.send();
	}
	function teststart(second)
	{
  		second -= 1;
  		var httpR = new XMLHttpRequest();
  		httpR.open("GET", "index.php?time=" + second);
  		httpR.send();
  		document.getElementById("time").innerHTML = second;
  		if(second != 0)
  		{
    		setTimeout("teststart(" + second + ")", 1000);
  		}
  		else
  		{
    		alert("time is out");
  		}
</script>


<?php
	//php for page
	$current = 1;//use a variate named $current to keep the pageNumber, initialize this variate

	if(isset($_GET['setPage']))
	{
		$_SESSION["current"] = $_GET['setPage'];
	}

	if(isset($_SESSION["current"]))
	{
		$current = $_SESSION["current"];
	}
	else
	{
		$_SESSION["current"] = 1;
	}
?>

<div class = "timeCountContainer">
	
	
</div>

<div class = "questionContainer">

<?php
	//php for questions
	define("questionAmount", 2);//define a constant to keep the number of question per page

	//print two questions
	for($i = 1; $i <= questionAmount; $i++)
	{
		$questionNum = ($current - 1) * 2 + $i;
		//print the question
		echo "<h4>".$questionNum.".".$test[$questionNum]['subject']."</h4>";

		//print the answers
		for($j = 'A'; $j <= 'D'; $j++)
		{
			echo "<p>";

			echo "<input type='radio' name='choose" . $i . "' value='" . $j;
			echo "' onchange='checkAnswer(";
			echo "'choose" . $i . "', '" . $j . "'";
			echo ")' id = 'question'" . $questionNum;
			if(@$_SESSION["choose".$i] == $j) 
			{
				echo"checked='checked'";
			}
			echo ">";

			echo $j.".";
			echo $test[$questionNum][$j];

			echo "</p>";
		}
	}
?>

	<div class = "page">
		<ul>
			<?php
				switch($current)
				{
					case 1:
						$previousPage = 1;
						$nextPage = $current + 1;
						break;
					case $totalPage:
						$nextPage = $totalPage;
						$previousPage = $current - 1;
						break;
					default:
						$previousPage = $current - 1;
						$nextPage = $current + 1;
						break;
				}

				echo "<li>";
				echo "<a href = 'index.php?setPage=";
				echo $previousPage;
				echo "'>";
				echo "Previous";
				echo "</a>"; 
				echo "</li>";

				for($i = 1; $i <= $totalPage; $i++)
				{
					echo "<li>";
					echo "<a href = 'index.php?setPage=";
					echo $i;
					echo "'>";
					echo $i;
					echo "</a>";
					echo "</li>";
				}

				echo "<li>";
				echo "<a href = 'index.php?setPage=";
				echo $nextPage;
				echo "'>";
				echo "Next";
				echo "</a>"; 
				echo "</li>";
			?>
			
		</ul>	
	</div>

</div>

<?php
	var_dump($_SESSION);
?>

</body>
</html>