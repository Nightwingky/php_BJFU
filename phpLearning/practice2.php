<!DOCTYPE html>
<html>
<head>
	<title>practice2</title>
</head>
<body>
<?php
	$fruit = array(
		'apple' => "apple",
		'banana' => "banana",
		'orange' => "orange");

	foreach($fruit as $key => $value)
	{
		echo "<br>".$key." is ".$value;
	}
?>
</body>
</html>