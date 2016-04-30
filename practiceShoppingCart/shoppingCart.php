<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
 	<title>购物车</title>
 
 	<style>
 		#container{
 			margin:0px auto;
 			border:1px solid black;
 			width:800px;
 			height:auto;
 		}

 		#tableContainer{
 			margin:10px 94px;
			border:1px solid red;
			width:auto; 
			display:inline-block !important; 
			display:inline; 
 		}

 		#btnReturn{
 			margin:0px 273px;
			padding:1px;
 		}
 	</style>

 </head>

 <body>

<?php
	session_start();

	$k = @$_GET['k'];

	if (@$_SESSION[$k]['num'] > 0) 
	{
		$_SESSION[$k]['num']--;
	}
?>

<div id="container">
	<div id="tableContainer">
		<table border="2" width=610px margin=1px>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Amount</th>
				<th>Option</th>
			</tr>

			<?php

			foreach ($_SESSION as $key=>$value) 
			{
				if ($value['num'] != 0) 
				{
					echo "<tr>";
					echo "<td>" . $_SESSION[$key]['name'] . "</td>";
					echo "<td>" . $_SESSION[$key]['price'] . "</td>";
					echo "<td>" . $_SESSION[$key]['num'] . "</td>";
					echo '<td style="text-align:center"><a href="shoppingCart.php?k=' . $key . '">remove one</a></td>';
					echo "</tr>";
			    	}
			}

			?>

		</table>

		<br>

		<div id="btnReturn">
			<a href = 'index.php'><input type="submit" value="return"></a>
		</div>
	</div>
</div>

 </body>
 </html>
