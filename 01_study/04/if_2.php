<?php

$age = 18;

if ($age < 20)
{
    echo '未成年です' . '<br>';
}

if ($age !== '18')
{
    echo '値とデータ型が一致していません' . '<br>';
}

var_dump($age < 20);

echo '<hr>';

var_dump($age!== '18');

var_dump($age != 18);