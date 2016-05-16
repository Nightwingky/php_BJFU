<!DOCTYPE html>
<html>
<head>
	<meta charset="gb2312">
	<title></title>
	<style type="text/css">
		.title
		{
			margin:10px auto;
		}

		.back
		{
			margin:10px auto;
			width:200px;
			height:30px;
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php	
	session_start();
	$chapterNum = $_GET["num"];
?>

<table border="2" class="title">
	<tr>
		<td colspan="2">
			<?php echo "<h2 align='center'>Chapter".$chapterNum."</h2>";?>
		</td>
	</tr>
	<tr>
		<?php
			echo "<td align='center'>";
			if($chapterNum == 1)
			{
				echo "<a href='index.php'>";
				echo "Back to Catalogue";
				echo "</a>";
			}
			else
			{
				echo "<a href='chapter.php?num=".@$_SESSION["chapter".($chapterNum-1)]."'>";
				echo "Last";
				echo "</a>";
			}
			 
			echo "</td>";

			echo "<td align='center'>";
			if($chapterNum == 7)
			{
				echo "<a href='index.php'>";
				echo "Back to Catalogue";
				echo "</a>";
			}
			else
			{
				echo "<a href='chapter.php?num=".@$_SESSION["chapter".($chapterNum+1)]."'>";
				echo "Next";
				echo "</a>"; 
			}
			
			echo "</td>";
		?>
	</tr>
</table>

<div>
	<?php
		$fp = fopen("/var/www/html/phptest/demo/praticeNovelFile/upfile/".$chapterNum.".txt", 'r');

		while(!feof($fp))
		{
			echo fgets($fp);
		}

		fclose($fp);
	?>
</div>

<div class="back">
	<a href="index.php" align="center">BACK TO CATALAGUE</a>
</div>
</body>
</html>