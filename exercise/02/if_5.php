<?php

$num = 73;

$i = 2;

for ($i; $i < $num; $i++) {
    if ($num % $i == 0) {
        echo $num . 'は素数ではありません';
        break;
    }
}

if ($i == $num) {
    echo $num . 'は素数です';
}
