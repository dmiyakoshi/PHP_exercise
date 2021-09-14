<?php

$num = 73;

for ($i = 2; $i <= $num; $i++) {
    if ($num % $i == 0) {
        echo $num . 'は素数ではありません';
        break;
    }

    if ($i == $num) {
        echo $num . 'は素数です';
    }
}

