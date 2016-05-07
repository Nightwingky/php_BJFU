<!DOCTYPE html>
<html>
<head>
	<title>practice6</title>
</head>
<body>

<?php
	$value = time();
	setcookie("test", $value);
	//header("Set-Cookie:cookie_name=value");
	if(isset($_COOKIE['test']))
	{
		echo "seccess<br>";

		var_dump($_COOKIE);
	}
?>

</body>
</html>