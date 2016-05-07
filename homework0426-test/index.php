<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>考试</title>


</head>
<body>

<script type="text/javascript">

function addAnswer(){

	// 提交表单form1, form1是表单的name属性
	form1.submit();
}

</script>

<?php

    session_start();
    include("test.txt");

    $current = 1;

    if (isset($_SESSION["current"])) {

        $current = $_SESSION["current"];

    }else {

        $_SESSION["current"] = 1;
    }

    if (isset($_SESSION["no" . $current])) {

        $answer1 = $_SESSION["no" . $current];

    }else {

        $answer1 = "null";
    }

    if (isset($_SESSION["no" . ($current + 1)])) {

        $answer2 = $_SESSION["no" . ($current + 1)];

    }else {

        $answer2 = "null";
    }

    echo "<form action='check.php' method='post' name='form1'>";
    echo "<h4>$current : " . $test[$current]["subject"] . "</h4>";
    ?>
    <p><input type="radio" name="choose1" value="A" onchange="addAnswer()" <?php if($answer1 == "A") echo "checked='checked'";?>> A. <?php echo $test[$current]["A"];?></p>
    <p><input type="radio" name="choose1" value="B" onchange="addAnswer()" <?php if($answer1 == "B") echo "checked='checked'";?>> B. <?php echo $test[$current]["B"];?></p>
    <p><input type="radio" name="choose1" value="C" onchange="addAnswer()" <?php if($answer1 == "C") echo "checked='checked'";?>> C. <?php echo $test[$current]["C"];?></p>
    <p><input type="radio" name="choose1" value="D" onchange="addAnswer()" <?php if($answer1 == "D") echo "checked='checked'";?>> D. <?php echo $test[$current]["D"];?></p>

    <?php echo "<h4>" . ($current + 1) . " : " . $test[$current + 1]["subject"] . "</h4>";?>
    <p><input type="radio" name="choose2" value="A" onchange="addAnswer()" <?php if($answer2 == "A") echo "checked='checked'";?>> A. <?php echo $test[$current + 1]["A"];?></p>
    <p><input type="radio" name="choose2" value="B" onchange="addAnswer()" <?php if($answer2 == "B") echo "checked='checked'";?>> B. <?php echo $test[$current + 1]["B"];?></p>
    <p><input type="radio" name="choose2" value="C" onchange="addAnswer()" <?php if($answer2 == "C") echo "checked='checked'";?>> C. <?php echo $test[$current + 1]["C"];?></p>
    <p><input type="radio" name="choose2" value="D" onchange="addAnswer()" <?php if($answer2 == "D") echo "checked='checked'";?>> D. <?php echo $test[$current + 1]["D"];?></p>
    <?php

    if ($current > 1) {

        echo "<div style='margin:10px 0px 5px 10px;'><input type='submit' name='ps' value='←'></div>";
    }

    if ($current + 1 < count($test)) {

        echo "<div style='margin:5px 0px 5px 10px;'><input type='submit' name='ns' value='→'></div>";
    }

    echo "</form>";

    ?>

    <p style="background-color:yellow; width:250px;margin:0;">↓查看你的SESSION里面保存的东西</p>

    <?php var_dump($_SESSION);  // var_dump()用于查看元素的类型、值?>

</body>
</html>