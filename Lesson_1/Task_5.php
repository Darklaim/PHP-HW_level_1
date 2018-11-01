<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <?php
    $b = 1;
    $a = 2;
    $b = $b + $a - ($a = $b);
    ?>
    
    <title>Task_5</title>
</head>
<body>
    <?php
    echo "a = $a <br>";
    echo "b = $b <br>";
    ?>
</body>
</html>