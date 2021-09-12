<?php

$socre_1 = 80;
$socre_2 = 80;

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