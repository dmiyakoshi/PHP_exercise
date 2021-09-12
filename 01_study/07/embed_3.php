<?php

$members = ['Bob', 'Tom', 'Ken'];

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>埋め込み</title>
    </head>
    <body>
        <h1>講師リスト</h1>
        <ul>
            <? foreach ($members as $member):?>
                <li>
                    <?= $member ?>
                </li>
            <? endforeach; ?>
        </ul>
    </body>
</html>