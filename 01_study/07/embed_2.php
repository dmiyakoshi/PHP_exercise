<?php

$age = 20;

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>埋め込み</title>
    </head>
    <body>
        <? if ($age >= 20): ?>
            <h2>成人です</h2>
        <? else: ?>
            <h2>未成年です</h2>
        <? endif; ?>
    </body>
</html>