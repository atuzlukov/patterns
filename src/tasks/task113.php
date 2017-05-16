<?php

$names = [
    'all.php',
    'auth.php',
    'auth.txt',
    'base.txt',
    'chat.html',
    'config.php',
    'count.php',
    'count_new.txt',
    'counter.dat',
    'counter.php',
    'create.php',
    'dat.db',
];

$maxLen = 0;

foreach($names as $name){

    $len = strlen($name);

    if($len > $maxLen){
        $maxLen = $len;
    }
}



echo '<pre>';
foreach ($names as $name) {
    printf("%{$maxLen}s\n", $name);
}
echo '</pre>';
