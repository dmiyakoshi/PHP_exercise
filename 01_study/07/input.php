<?php

$name = '';
$age = '';
$err_message = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $age = $_POST['age'];

    if (empty($name))
    {
        $err_message[] = '氏名を入力してください';
    }

    if (empty($age))
    {
        $err_message[] = '年齢を入力してください';
    }

    if ($name && $age)
    {
        header('Location: thankyou.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>個人情報送信</h1>
        <? if ($err_message): ?>
            <h2>エラーメッセージ</h2>
            <ul>
                <? foreach ($err_message as $err): ?>
                    <li><?= $err ?></li>
                <? endforeach; ?>
            </ul>
        <? endif ?>
        <form action="" method="POST">
            <div>
                <label for="name">氏名</label><br>
                <input type="text" name="name" id="name" value="<?= $name ?>">
            </div>
            <div>
                <label for="age">年齢</label><br>
                <input type="number" name="age" id=age value="<?= $age ?> ">
            </div>
            <div class="submit">
                <input type="submit" value="送信">
            </div>
        </form>
    </body>
</html>