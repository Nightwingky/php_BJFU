<!DOCTYPE html>
<html>
<head>
	<title>VerificationCode</title>
</head>
<body>

<?php

	if(isset($_REQUEST['authcode']))
	{
		session_start();

		if(strtolower($_REQUEST['authcode']) == strtolower($_SESSION['authcode']))
		{
			echo '<font color = "#0000CC">correct</font>';
		}
		else
		{
			echo '<font color = "#CC0000">wrong</font>';
		}
		exit();
	}
?>

<form 
	method = "post"
	action = "index.php">
	<p>VerificationCode:
		<img id = "capatcha_img" border = "1" src = "verificationCode.php?r=<?php echo rand();?>" width = "100" height = "30">
		<a href = "javascript:void(0)" onclick = "document.getElementById('capatcha_img').src = 'verificationCode.php?r='+Math.random()">Another One?</a>
	</p>
	<p>Input:
		<input type = "text" name = "authcode" value = ""/>
	</p>
	<p>
		<input type = "submit" value = "submit" style = "padding:6px 20px;">
	</p>
</form>

</body>
</html>