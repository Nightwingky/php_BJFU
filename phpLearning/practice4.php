<!DOCTYPE html>
<html>
<head>
	<title>practice4</title>
</head>
<body>

<?php
	class Person
	{
		function __construct()
		{
			echo "This is the construction.<br>";
		}

		function __destruct()
		{
			echo "This is the destruction.<br>";
		}
	}

	class Man extends Person
	{
		function __construct()
		{
			echo "This is the son construction.<br>";
			parents::__construct();
		}

		function __destruct()
		{
			echo "This is the son destruction.<br>";
			parents::__destruct();
		}
	}

	$person = new Person();
	$man = new Man();

	//unset($person);
	unset($man);
?>

</body>
</html>