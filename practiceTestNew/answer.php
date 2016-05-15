<!DOCTYPE html>
<html>
<head>
	<title>Answer</title>

	<style type="text/css">
		.answerTable
		{
			margin:20px auto;
			align:center;
		}
	</style>
</head>
<body>

<?php
	session_start();

	include("answer.txt");
?>


<table class = "answerTable" border = "1">
	<tr>
		<th>My Answer</th>
		<th>Correct Answer</th>
	</tr>

	<?php
		for($i = 1; $i <= 12; $i++)
		{
			echo "<tr>";

			echo "<td align = 'center'";
			if(@$_SESSION["Answer".$i] != $answers[$i - 1])
			{
				echo "style = 'background-color:red'";
			}
			echo ">" . @$_SESSION["Answer".$i] . "</td>";
			echo "<td align = 'center'>" . $answers[$i - 1] . "</td>";

			echo "</tr>";
		}
	?>

</table>

</body>
</html>