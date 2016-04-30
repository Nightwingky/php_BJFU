<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta/>
<title>Kunyang_Que</title>
</head>
<body>
<?php
	if(isset($_GET["flag"]))
	{
		echo "<h4>username or password wrong</h4>";
	}
	if(isset($_COOKIE["user"]))
	{
		header("location:welcome.php?user=".$COOKIE["user"]);
	}
	
?>
<form action = "varify2.php" method = "post">
	<table border="1" align = "center">
		<tr>
			<td align = "left">User Login</td>
			<td><input type = "test" name = "user_name"></td>
		</tr>
		<tr>
			<td align = "left">Password</td>
			<td><input type = "password" name = "pwd"></td>
		</tr>
		<tr align = "center">
			<td align = "left">AutoLogin<input type = "checkbox" name = "auto" value = "auto"></td>
			<td colspan = "2">
				<input type = "submit" name = "submit" value = "submit">
				<input type = "reset" name="reset" value=" reset  ">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">