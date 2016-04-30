<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
    	<title>Kunyang_Que_PracticeShoppingCart</title>

    	<style>
    		ul {
			list-style-type:none;
			margin: 0px;
			padding:0px;
			width:610px;
		}

		li {
			float:left;
			margin-left:1px;
			margin-right: 1px;
		}

		a {
			text-decoration:none;
			display: block;
			height:30px;
			line-height:30px;
			width:120px;
			background-color:#eeeeee;
			text-align:center;
			color:black;
		}

		#container{
			height:auto;
			width:800px;
			border:1px solid black;
			margin: 0 auto;
		}

		#titlebar{
			margin:20px 94px;
			border:1px solid red;
			width:auto; 
			display:inline-block !important; 
			display:inline; 
		}

		#tableContainer{
			margin:0px 94px 20px 94px;
			border:1px solid red;
			width:auto; 
			display:inline-block !important; 
			display:inline; 
		}

		#btnSubmit{
			margin:0px 273px;
			padding:1px;
		}

		#btnCheckbox{
			margin:0 250px;
			padding:1px;
			width:auto;
		}
    	</style>
</head>

<script language="javascript">
	function select_all()
	{
		var len = document.forms[0].elements.length;
		alert(len);

		if(document.getElementById("selectall").checked == true)
		{
			for(var i = 0; i < len; i++)
			{
				if(document.forms[0].elements[i].name == "s[]")
				{
					if(document.forms[0].elements[i].checked == false)
					{
						document.forms[0].elements[i].checked = true;
					}
				}
			}
		}
		else
		{
			for(var i = 0; i < len; i++)
			{
				if(document.forms[0].elements[i].name == "s[]")
				{
					if(document.forms[0].elements[i].checked == true)
					{
						document.forms[0].elements[i].checked = false;
					}
				}
			}
		}

	}
</script>

<body>

<?php
	include("booklist.txt");
	session_start();
?>


<div id="container">
	<div id="titlebar">
		<ul>
			<li><a href="index.php?book=economy">ecomomy</a></li>
			<li><a href="index.php?book=IT">IT</a></li>
			<li><a href="index.php?book=culture">culture</a></li>
			<li><a href="index.php?book=science">science</a></li>
			<li><a href="shoppingCart.php">购物车</a></li>
		</ul>
	</div>

	<br>

	<div id="tableContainer">
		<form action="" method="post">
			<table border="2" width=610px margin=1px>
				<tr>
					<th>Name</th>
					<th>Author</th>
					<th>Price</th>
					<th>Option</th>
				</tr>

				<?php

					if(isset($_GET["book"]))
					{
						$sort = $_GET["book"];
					}
					else
					{
						$sort = "economy";
					}

					if (empty($_SESSION)) 
					{
					    	foreach ($bc as $key=>$value) 
					    	{
					        		foreach ($value as $k=>$v) 
					        		{

					            			$v['num'] = 0;
											$_SESSION[$v['name']] = $v;
									}
					    	}
					}

					foreach ($bc[$sort] as $key=>$value) 
					{
						echo "<tr>";

					    	foreach ($value as $k=>$v) 
					    	{
					        		echo "<td>$v</td>";
							}
					    	$bookName = $value["name"];
					    	echo "<td><input name='s[]' type='checkbox' value=$bookName></td>";
					    	echo "</tr>";
					}

				?>

			</table>

			<div id="btnCheckbox">
			all/cancel<input name='selectall' type='checkbox' onclick="select_all()" id="selectall">
			</div>

			<br>

			<div id="btnSubmit">
				<input type="submit" value="submit">
				<br>
			</div>
			
		</form>
	</div>
</div>

<?php

	$a=@$_POST["s"];

	for ($i = 0; $i < count($a); $i++) 
	{
		foreach ($_SESSION as $key=>$value) 
		{
        	if ($key == $a[$i]) 
       		{
				$_SESSION[$key]['num']++;
      		}
    	}
	}

?>

</body>
</html>
