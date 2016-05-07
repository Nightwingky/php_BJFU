<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>考试</title>
</head>
<body>

<?php

    session_start();

    $current = $_SESSION["current"];

    if (isset($_POST['choose1'])) {

        $ans = $_POST['choose1'];
        $_SESSION['no' . $current] = $ans;
    }

    if (isset($_POST['choose2'])) {

        $ans = $_POST['choose2'];
        $_SESSION['no' . ($current + 1)] = $ans;
    }

    if (isset($_POST['ns'])) {

        $_SESSION['current'] += 2;
    }
    else if(isset($_POST['ps'])){

        $_SESSION['current'] -= 2;
    }

    header("location:index.php");
?>

</body>
</html>