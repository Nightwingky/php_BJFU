<!DOCTYPE html>
<html>
<head>
	<title>checkONePage</title>
</head>
<body>

<?php
	session_start();

	$number=$_GET["number"];
	$value=$_GET["value"];

	$_SESSION[$number]=$value;
?>

</body>
</html>