<!DOCTYPE html>
<html>
<head>
	<title>check</title>
</head>
<body>

<?php

    session_start();

    $current = $_SESSION["current"];

    //answer of question1
    if(isset($_POST['choose1'])) 
    {
        $answer1 = $_POST['choose1'];
        $_SESSION['no'.$current] = $answer1;
    }

    //answer of question2
    if(isset($_POST['choose2'])) 
    {
        $answer2 = $_POST['choose2'];
        $_SESSION['no'.($current + 1)] = $answer2;
    }

    //click the button
    if(isset($_POST['next'])) 
    {
        $_SESSION['current'] += 2;
    }
    else if(isset($_POST['last']))
    {
        $_SESSION['current'] -= 2;
    }

    header("location:index.php");
?>

</body>
</html>