<!DOCTYPE html>
<html>
<head>
	<title>check</title>
</head>
<body>

<?php

    session_start();

    $current = $_SESSION["current"];

    //记录当前页面问题1的答案到$_SESSION数组
    if(isset($_POST['choose1'])) 
    {
        $answer1 = $_POST['choose1'];
        $_SESSION['no'.$current] = $answer1;
    }

    //记录当前页面问题2的答案到$_SESSION数组
    if(isset($_POST['choose2'])) 
    {
        $answer2 = $_POST['choose2'];
        $_SESSION['no'.($current + 1)] = $answer2;
    }

    //点击上一页或下一页按钮，改变$_SESSION['current']的值，然后传回去
    if(isset($_POST['next'])) 
    {
        $_SESSION['current'] += 2;
    }
    else if(isset($_POST['last']))
    {
        $_SESSION['current'] -= 2;
    }

    header("location:index.php");//跳转回index.php
?>

</body>
</html>
