<!DOCTYPE html>
<html>
<head>
	<title>practice5</title>
</head>
<body>

<?php
	$p = 'http://';
	echo $p.'<br>';
	$p = '/<br>'.preg_quote($p, '/').'<br>/';
	echo $p;
?>

</body>
</html>