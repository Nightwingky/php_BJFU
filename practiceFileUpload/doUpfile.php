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
			header("location:upfile.php?why = 2");
			exit();
		}

		if($_FILES["file_name"]["size"] > 40000)
		{
			header("location:upfile.php?why = 3");
			exit();
		}

		if($_FILES["file_name"]["error"] != 0)
		{
			header("location:upfile.php?why = 1");
			exit();
		}

		move_uploaded_file($_FILES["file_name"]["tmp_name"], "upfile/a.doc");
		header("location:upfile.php?why = 4");
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