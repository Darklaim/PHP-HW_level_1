<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <?php   
        $title = 'Task_4';
        $h1 = '<h1>Заголовок</h1>';
        $date = (date("l dS F Y"));
    ?>
    <title><? echo $title ?></title>
</head>
<body>
    <?php
    echo $h1;
    echo $date;
    ?>
</body>
</html>