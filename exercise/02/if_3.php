<?php

$score = 50;

if ($score >= 60) {
    echo '合格です';
} elseif ($score < 30) {
    echo '不合格です';
} else {
    echo '追試です';
}
