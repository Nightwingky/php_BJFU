<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style type="text/css">
		.table
		{
			margin: 10px auto;
		}
	</style>
</head>

<script type="text/javascript">
	function getVerificationCode()
	{
		var httpRequest = new XMLHttpRequest();

  		httpRequest.open("GET","verify.php");
  		httpRequest.send();
	}
</script>

<body>

<?php
	ob_clean();
	session_start();
	
	//header("content-type:image/jpeg");
?>

<table border = "2" class = "table">
	<tr>
		<th colspan = "2">Login In</hd>
	</tr>
	<tr>
		<td align = "center">User Name</td>
		<td><input type = "test" name = "user_name"></td>
	</tr>
	<tr>
		<td align = "center">Password</td>
		<td><input type = "test" name = "passward"></td>
	</tr>
	<tr>
		<td align = "center">Verification Code</td>
		<td>
			<input type = "test" name = "verification">
		</td>
	</tr>
	<tr>
		<td align = "center">
			<img width = "100px" height = "25px" id = "verificationCode">
		</td>
		<td align = "center">
			<button type = "button" onclick = "getVerificationCode()">Another One</button>
		</td>
	</tr>
	<tr>
		<td align = "center" colspan = "2">
			<button type = "button">Submit</button>
			&nbsp;&nbsp;
			<button type = "button">Reset</button>
		</td>
	</tr>
</table>

<?php
	var_dump($_SESSION);
?>

</body>
</html>