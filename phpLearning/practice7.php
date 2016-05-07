<!DOCTYPE html>
<html>
<head>
	<title>practice7</title>
</head>
<body>

<?php
	session_start();

	$_SESSION['test'] = time();

	echo "session_id():".session_id();
	echo "<br>";

	echo $_SESSION['test'];

	echo $_SESSION['test'];

	unset($_SESSION['test']);

	echo "<br>";

	var_dump($_SESSION);
?>

</body>
</html>