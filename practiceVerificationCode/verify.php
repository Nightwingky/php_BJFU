<!DOCTYPE html>
<html>
<head>
	<title>Verification Code</title>
</head>
<body>

<?php
	session_start();
	header("Content-Type: text/html");

	$code = array('q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m','Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','1','2','3','4','5','6','7','8','9','0');

	$variCode = 
		$code[rand(0, 62)].
		$code[rand(0, 62)].
		$code[rand(0, 62)].
		$code[rand(0, 62)];

	$_SESSION["variCode"] = $variCode;

	//var_dump($_SESSION);
?>

</body>
</html>