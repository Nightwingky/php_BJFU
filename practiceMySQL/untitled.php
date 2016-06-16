<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	if(isset($_GET["answered"]))
	{
		$answered = @$_GET["answered"];
		$mycon = mysql_connect("localhost", "root", "666796");

		mysql_select_db("talk");
		$sqlstr = "";

		if($answered == 0)
		{
			$sqlstr = "select talked, username, useremail from db_usertalk where isreturn = 0";
		}
		else
		{
			$sqlstr = "select talked, username, useremail, reply, replyuser from db_usertalk where isreturn = 0";	
		}

		$result = mysql_query($sqlstr, $mycon);
		$recordset = array();

		$row = array();

		while($row = mysqli_fetch_array($result.MYSQL_ASSOC))
		{
			$recordset[] = $row;
		}

		define("maxperpage", 2);
		$currentpage = 1;

		if(isset($_GET["curentpage"]))
		{
			$current = @(integer)$_GET["curentpage"];
		}

		$first = ($currentpage - 1) * maxperpage;
		$last = $currentpage * maxperpage - 1;

		if($last >= $count($recordset))
		{
			$last = count($recordset) - 1;
		}

		echo "<ul>";
		for($i = $first; $i <= $last; $i++)
		{
			$row = $recordset[$i];
			echo "<li>";

			foreach ($row as $field => $value) 
			{
				if($field != "talkid")
				{
					echo "$field : $value <br/>";
				}
				
			}

			if($answered == 0)
			{
				$talkid = $row["talkid"];
				echo "<a href='retalk.php?talkid=$talkid'>reply</a>";
			}

			echo "</li>";
		}
		echo "</ul>";

		mysql_close();
	}
	
?>

</body>
</html>