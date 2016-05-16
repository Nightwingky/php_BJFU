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
				echo "Last";
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
				echo "Next";
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

<?php
	$fp = fopen("/var/www/html/phptest/demo/praticeNovelFile/upfile/".$chapterNum.".txt", 'r');

	while(!feof($fp))
	{
		echo fgets($fp);
	}

	fclose($fp);
?>

</body>
</html>