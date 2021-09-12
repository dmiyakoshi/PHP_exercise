<?php

require_once __DIR__ . "/User.php";

$bob = new User('Bob', 20);

echo $bob->selfIntroduction();

$bob->setName('Bob.smith');
$bob->setAge(30);

echo $bob->getNmae();
echo "\n";

echo $bob->getAge();
echo "\n";

echo $bob->selfIntroduction();