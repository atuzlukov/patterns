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
    'datdfdfdf.db',
];

$count = count($names);

$center = ceil($count/2);

$left = array_slice($names, 0, $center);
$right = array_slice($names, $center);

$maxLenLeft = 0;

foreach($left as $l){

    $len = strlen($l);

    if($len > $maxLenLeft){
        $maxLenLeft = $len;
    }
}

$maxLenRight = 0;

foreach($right as $r){

    $len = strlen($r);

    if($len > $maxLenRight){
        $maxLenRight = $len;
    }
}



echo '<pre>';
foreach ($left as $k=>$lName) {

    $addLen = $maxLenRight + ($maxLenLeft - strlen($lName)) + 10;

    printf("%s %{$addLen}s\n", $lName, $right[$k]);
}
echo '</pre>';
