<?php

$nums = range(1, 100);

function maxArray($array)
{
    $maxValue = $array[0];

    for ($i = 0; $i < 100; $i++)
    {
        if ($maxValue < $array[$i])
        {
            $maxValue = $array[$i];
        }
        else
        {
            //none
        }
    }

    return $maxValue;
}

echo maxArray($nums);