<?php

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $message = $_POST['message'];
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>フォームの練習</title>
    </head>
    <body>
        <h1>POSTメゾット</h1>
        <form action="" method="POST">
            <div>
                <label for="">メッセージ</label><br>
                <input type="text" name="message">
            </div>
            <div>
                <input type="submit" value="送信">
            </div>
        </form>
    </body>

    <p><?= $message ?></p>
</html>