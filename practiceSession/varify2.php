<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta/>
<title>Kunyang_Que</title>
</head>
<body>

<?php
	
	if(isset($_POST["submit"]))
	{
		$user = $_POST["user_name"];
		$pwd = $_POST["pwd"];
		if($user == "liuyin" && $pwd == "123456")
		{
			if(isset($_POST["auto"]))
			{
				setcookie("user", "liuyin", time()+60);
				setcookie("pwd", "123456", time()+60);
			}
			header("location:welcome.php?user = $user");
		}
		else
	              {
		              header("location:classPractice.php?flag = 1");
	              }
	}
	
?>

</body>
</html>