<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
    	<title>Kunyang_Que_PracticeLinkage</title>
</head>

<script language="javascript">
	function change_catalog()
	{
		document.form[0].submit();
		
	}
</script>

<body>

<?php
	include("booklist.txt");

	echo "<form action='' method='post'>";

	echo "<select onchange='change_catalog()'>";
	echo "<option>==choose catalog==</option>";

	foreach($bookclassify as $catalog => $books)
	{
		echo "<option value='$catalog'>$catalog</option>";
	}

	echo "</select>";

	echo "<br><br>";

	echo "<select>";
	echo "<option>==choose catalog==</option>";
	if($_POST["catalog"])
	{
		$books=$bookclassify[$_POST["catalog"]];
	}
	echo "</select>";

	echo "</form>";
?>

</body>

</html>