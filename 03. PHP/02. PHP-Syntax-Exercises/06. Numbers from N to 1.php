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
    $array = [];
    if(isset($_GET['num'])){
        $n = intval($_GET['num']);

        for ($i =  $n; $i >= 1; $i--){
            $array[] = $i;
        }
        echo implode(" ", $array);
    }
    ?>
</body>
</html>