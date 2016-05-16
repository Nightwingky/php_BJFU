<!DOCTYPE html>
<html>
<head>
	<title>Chapter</title>
	<meta charset="gb2312">
	<style type="text/css">
		.tableChapter
		{
			margin:20px auto;
			align:center;
		}
	</style>
</head>
<body>

<?php
	session_start();

	$fp = fopen("filelist.txt", 'r');
	$i = 0;
	while(!feof($fp))
	{
		$i++;
		$_SESSION["chapter".$i] = fgets($fp);
	}
	fclose($fp);
?>

<table border = 1 class = "tableChapter">
	<tr>
		<th colspan="4">Novel</th>
	</tr>
	<?php
		$count = 1;
		for($i = 1; $i <= 2; $i++)
		{
			echo "<tr>";
			for($j = 1; $j <= 4; $j++)
			{
				$chapterNum = @$_SESSION["chapter".$count];
				echo "<td>";
				//echo $chapterNum;
				echo "<a href='chapter.php?num=".$chapterNum."'>";
				echo $chapterNum;
				echo "</a>";
				echo "</td>";
				$count++;
			}
			echo "</tr>";
		}
	?>
</table>

<?php
	var_dump($_SESSION);
?>

</body>
</html>