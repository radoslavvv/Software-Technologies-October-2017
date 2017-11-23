<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
    <?php
        for ($row = 1; $row <= 9; $row++) {
            for ($line = 1; $line <= 5; $line++) {
                $topPart = $row == 1 || $row == 5 || $row == 9;
                $rightPart = ($row >= 2 && $row <= 4) && $line == 1;
                $leftPart = ($row >= 6 && $row <= 8) && $line == 5;

                if ($topPart || $rightPart || $leftPart) {
                    ?>
                    <button style="background-color: blue">1</button>
                <?php }else{ ?>
                    <button>0</button>
               <?php }
            } ?>
            <br>
        <?php }
    ?>
</body>
</html>