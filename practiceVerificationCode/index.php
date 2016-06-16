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
		var alphabet = ["q","w","e","r","t","y","u","i","o","p","o","a","s","d","f","g","h","j","k","l","k","z","x","c","v","b","n","m","Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M","1","2","3","4","5","6","7","8","9","0"];

		var veriCode = 
			alphabet[Math.floor(Math.random()*62)]+
			alphabet[Math.floor(Math.random()*62)]+
			alphabet[Math.floor(Math.random()*62)]+
			alphabet[Math.floor(Math.random()*62)];

		//alert(veriCode);
		/*
		var httpRequest = new XMLHttpRequest();

  		httpRequest.open("GET","verify.php?veriCode="+veriCode);
  		httpRequest.send();
		*/
  		var yucodeurl = document.getElementById("code").src;
 		document.getElementById("code").src = yucodeurl +'?'+ veriCode;

  		//document.getElementById("code").innerHTML.src = ;
	}
</script>

<body>

<?php
	//ob_clean();
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
			<img width = "100px" height = "25px" src = "verify.php">
		</td>
		<td align = "center">
			<button type = "button" onclick = "getVerificationCode()" id = "code">Another One</button>
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