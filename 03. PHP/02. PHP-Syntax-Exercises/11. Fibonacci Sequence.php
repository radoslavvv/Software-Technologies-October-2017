<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
        if(isset($_GET['num'])){
            $num = intval($_GET['num']);

            $fibNumbers = [1];

            $a = 1;
            $b = 2;
            $c = 4;
            $count = 1;

            while($count < $num){
                $fibNumbers[] = $a;
                $count++;

                $d = $a;
                $a = $b;
                $b = $c;

                $c = $d + $a + $b;
            }
            echo implode(" ",$fibNumbers);
        }
    ?>
</body>
</html>