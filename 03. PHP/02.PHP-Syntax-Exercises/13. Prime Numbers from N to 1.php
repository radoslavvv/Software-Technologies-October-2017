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
            $n = intval($_GET['num']);
            $primes = [];

            for($i = $n; $i >= 1; $i--){
                if(isPrime($i)){
                    $primes[] = $i;
                }
            }
            echo implode(" ",$primes);
        }

        function isPrime($number){
            if($number == 2){
                return true;
            }

            if($number == 1 || $number % 2 == 0){
                return false;
            }

            $value = ceil(sqrt($number));

            for($i = 3; $i <= $value; $i += 2 ){
                if($number % $i == 0){
                    return false;
                }
            }
            return true;
        }
    ?>
</body>
</html>