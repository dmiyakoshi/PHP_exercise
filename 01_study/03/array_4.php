<?php

$menbers = ['Bob', 'Tom', 'Ken', 'John'];

$menbers[1] = 'Michael';

$menbers[] = 'Daniel';

print_r($menbers);

echo '<br><hr>';

$menbers[50]  = 'SKIP'; //キーを連番にしないことも可能
$menbers[] = 'TAIL';

print_r($menbers);