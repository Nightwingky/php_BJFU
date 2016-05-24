<!DOCTYPE html>
<html>
<head>
	<title>Uploading...</title>
</head>
<body>

<h1>Uploading File...</h1>

<?php

	if($_FILES['userfile']['error'] > 0)
	{
		echo "Problem:";

		switch($_FILES['userfile']['error'])
		{
			case 1:
				echo "File exceed upload_max_filesize";
				break;
			case 2:
				echo "File exceed max_file_size";
				break;
			case 3:
				echo "File only partially uploaded";
				break;
			case 4:
				echo "No file uploaded";
				break;
			case 6:
				echo "Cannot upload file: No temp directory specified";
				break;
			case 7:
				echo "Upload failed: Cannot write to disk";
				break;
			default:
				echo "I don't know what the problem is";
				break;
		}
	}

	if($_FILES['userfile']['type'] != 'text/plain')
	{
		echo "Problem: File is not plain text";
		exit();
	}

	$upfile = "upfile/".$_FILES['userfile']['name'];

	if(is_uploaded_file($_FILES['userfile']['tmp_name']))
	{
		if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
		{
			echo "Problem: Could not move file to destination directory";
			exit();
		}
	}
	else
	{
		echo "Possible file upload attack. Filename:";
		echo $_FILES['userfile']['name'];
		exit();
	}

	echo "File uploaded successfully<br><br>";

	chmod($upfile, 777);//If your operating system is Linux, PLEASE ADD THIS LINE!!!!!

	$contents = file_get_contents($upfile);

	/*
	$contents = strip_tags($contents);
	file_put_contents($_FILES['userfile']['name'], $contents);
	*/

	echo "<p>Preview</p>";
	echo $contents;
	echo "<br><br>";

	$fp = fopen("filelist.txt", 'a');
	$filename = explode(".", $_FILES['userfile']['name']);
	fwrite($fp, "\r\n");
	fwrite($fp, $filename[0]);
	fclose($fp);
?>

<a href="upload.html">back</a>

</body>
</html>