<?php

echo '1つ目の点数を入力してください ';

$socre_1 = fgets(STDIN);

echo '2つ目の点数を入力してください ';

$socre_2 = fgets(STDIN);


if ($socre_1 >= 80 && $socre_2 >= 80)
{
    echo '合格';
}
elseif ($socre_1 >= 50 || $socre_2 >= 50)
{
    echo '追試';
}
else
{
    echo '不合格';
}

echo "\n";