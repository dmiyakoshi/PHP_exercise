<?php

require_once __DIR__ . '/User.php';

$bob = new User('Bob', 20);
$tom = new User('Tom', 21);
$ken = new User('Ken',22);

echo $bob->selfIntroduction();
echo $tom->selfIntroduction();
echo $ken->selfIntroduction();