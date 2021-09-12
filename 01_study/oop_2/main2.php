<?php

require_once __DIR__ . '/functions.php';

$bob = 
[
    'name' => 'Bob',
    'age' => 20
];

$tom =
[
    'name' => 'Tom',
    'age' => 21
];

$ken =
[
    'name' => 'Ken',
    'age' => 22
];

echo selfIntroduction($bob);
echo selfIntroduction($tom);
echo selfIntroduction($ken);