<!DOCTYPE html>
<html>
<head>
	<title>Verification Code</title>
</head>
<body>

<?php
	ob_clean();
	session_start();
	header("Content-Type: image/jpeg");

	//$veriCode = $_GET["veriCode"];

	if(@$VeriCode == "")
	{
		$code = array('q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m','Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','1','2','3','4','5','6','7','8','9','0');

		$veriCode = 
			$code[rand(0, 62)].
			$code[rand(0, 62)].
			$code[rand(0, 62)].
			$code[rand(0, 62)];	
	}
	else
	{
		$veriCode = $_GET["veriCode"];
	}

	$_SESSION["veriCode"] = $veriCode;

	$img = imagecreatetruecolor(100, 25);
	$black = imagecolorallocate($img, 0x00, 0x00, 0x00);
	$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
	$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
	imagefill($img, 0, 0, $white);

	imagestring($img, 5, 10, 3, $veriCode, $black);

	for($i = 0; $i < 50; $i++) 
	{
  		imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black); 
  		imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
	}

	imagejpeg($img);
	//$_SESSION["img"] = $img;
	imagedestroy($img); 
	//var_dump($_SESSION);

	//echo "<script type='text/javascript'>document.getElementById('code').innerHTML.src = 'verify.php';</script>";
?>

<script type="text/javascript">
	document.getElementById("code").innerHTML.src = "verify.php";
</script>

</body>
</html>