<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
    <?php
        $value = 0;
        for ($i = 1; $i <= 5; $i++, $value++){
            for ($j = 1; $j <= 10; $j++){ ?>
                <div style="background-color: rgb(<?=$value?>, <?=$value?>, <?=$value?>)"></div>
                <?php

                $value+=5;
            } ?>
        <br>
        <?php }
    ?>
</body>
</html>