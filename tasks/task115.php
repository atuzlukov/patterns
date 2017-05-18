<?php

$names = [
    '1.php',
    '2.php',
    '3.txt',
    '4.txt',
    '5.html',
    '6.php',
    '7.php',
    '8.txt',
    '9.dat',
    '10.php',
    '11.php',
    '12.db',
    '13.db',
    '14.php',
    '15.txt',
    '16.dat',
    '17.php',
    '18.php',
    '19.db',
    '20.db',
];

$count = count($names);
$cols = 3;

echo 'Построчно';

$i = 1;
echo '<table>';
echo '<tr>';
foreach($names as $name){
    echo '<td>';
    echo $name;
    echo '</td>';
    if($i % $cols == 0 && $i>1){
        echo '</tr><tr>';
    }
    $i++;
}
echo '</tr>';
echo '</table>';

echo 'По столбцам';

$colsElement = ceil($count/$cols);

echo '<table>';
for($i=0; $i < $colsElement; $i++){
    echo '<tr>';
    for($j=0; $j < $cols; $j++){
        echo '<td>';
        echo $names[$i+$colsElement*$j];
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

