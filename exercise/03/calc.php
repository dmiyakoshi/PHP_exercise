<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>calc.php</title>
    </head>
    <body>
        <?php 
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];

            $operation = $_GET['operator'];

            if ($operation == 'addition'){
                echo $num1 . ' + '. $num2 . ' = ' .  $num1 + $num2;
            }elseif ($operation == 'subtraction') {
                echo $num1 . ' - '. $num2 . ' = ' .  $num1 - $num2;
            } elseif ($operation == 'multiplication') {
                echo $num1 . ' * '. $num2 . ' = ' .  $num1 * $num2;
            } elseif ($operation == 'division') {
                echo $num1 . ' / '. $num2 . ' = ' .  $num1 / $num2;
            } else {
                echo '正しい演算子を指定して下さい';
            }
        ?>
    </body>
</html>