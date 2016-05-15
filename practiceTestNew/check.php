<!DOCTYPE html>
<html>
<head>
	<title>checkOnePage</title>
</head>
<body>

<?php
	session_start();
	header("Content-Type: text/html");
	$number=$_GET["number"];
	$value=$_GET["value"];

	$_SESSION[$number]=$value;

	//header("location:index.php");
?>

</body>
</html>