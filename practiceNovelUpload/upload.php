<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>

	<style type="text/css">
		.container
		{
			width:1000px;
			height:500px;
			margin:10px auto;
		}

		.formContainer
		{
			margin:20px auto;
			border:1px solid blue;
			width:600px;
			height:200px;
			padding:20px;
		}
	</style>
</head>
<body>

<div class = "container">

	<form
		action = "doUpload.php"
		method = "post"
		enctype = "multipart/form-data">
		
		<div class = "formContainer">
			<input type = "hidden" name = "MAX_FILE_SIZE" value = "10000000">

			<table align = "center" border = "2">
				<tr>
					<td colspan = "2"><h1 align = center>Upload new files</h1></td>
				</tr>
				<tr>
					<td><label for = "userfile">Upload a File</label></td>
					<td><input type = "file" name = "userfile" id = "userfile"></td>
				</tr>
				<tr>
					<td colspan="2" align = "center"><input type = "submit" value = "Send File"></td>
				</tr>
			</table>
		</div>

	</form>
<div>

</body>
</html>