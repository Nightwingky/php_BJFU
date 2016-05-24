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
	$countLine = 0;
	while(!feof($fp))
	{
		$countLine++;
		$string = fgets($fp);
		if($string)
		{
			$_SESSION["chapter".$countLine] = $string;
		}
	}
	fclose($fp);
?>

<table border = 1 class = "tableChapter">
	<tr>
		<th>Novel</th>
	</tr>
	<?php
		for($i = 1; $i<=$countLine; $i++)
		{
			$strArr = str_split(@$_SESSION["chapter".$i], "1");
			if($strArr[0] == "0")
			{
				$chapterNum = @$_SESSION["chapter".$i];
				echo "<tr>";
				echo "<td align='center'>";
				echo "<a href='chapter.php?num=".$chapterNum."&total=".$countLine."'>";
				echo $chapterNum;
				echo "</a>";
				echo "</td>";
				echo "</tr>";
			}
		}
		/*
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
		*/
	?>
</table>

<?php
	var_dump($_SESSION);
?>

</body>
</html>