<!DOCTYPE html>
<html>
<head>
	<title>PracticeFileUpload</title>

	<style type="text/css">
		.container
		{
			border:1px solid red;
			width:1000px;
			height:1000px;
			margin:10px auto;
		}
	</style>
</head>
<body>

<?php
	if(isset($_POST["add"]))
	{
		$tmp = explode(".", $_FILES["file_name"]["name"]);

		if($tmp[1] != "doc" && $tmp[1] != "DOC")
		{
			
		}

		/*
		foreach ($_FILE["file_name"] as $key => $value) 
		{
			
		}
		*/
	}
?>

<div class = "container">
	<div>

	</div>
</div>

</body>
</html>