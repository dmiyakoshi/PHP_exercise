<?php

$message = '採点結果';

$scores =
[
    '国語' => 70,
    '数学' => 50,
    '英語' => 30
];

$total_score = array_sum($scores);

?>

<!DOCTYPE html>
<html lang="ja">
    <html>
        <head>
            <meta charset="utf-8">
            <title>埋め込み</title>
        </head>
        <body>
            <h1><?= $message ?></h1>

            <? if ($total_score >= 210): ?>
                <h2>合格</h2>
            <? else: ?>
                <h2>不合格</h2>
            <? endif; ?>

            <h1>得点の内訳</h1>
            <ul>
                <? foreach ($scores as $subject => $score): ?>
                    <li><?= "{$subject} {$score}" ?><点/li>
                <? endforeach; ?>
            </ul>
        </body>
    </html>
</html>