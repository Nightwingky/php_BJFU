<!DOCTYPE html>
<html>
<head>
	<title>practice3</title>
</head>
<body>

<?php

	function func($a, $b)
	{
		echo $a + $b;
	}

	if(function_exists(func))
	{
		echo "exist<br>";

		func(1, 2);
	}
?>

</body>
</html>