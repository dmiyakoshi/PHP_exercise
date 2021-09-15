<?php

$num = 2;

for ($i = 2; $i <= $num; $i++) {
    if ($i == $num) {
        echo $num . 'は素数です';
        break;
    }

    if ($num % $i == 0) {
        echo $num . 'は素数ではありません';
        break;
    }
}
