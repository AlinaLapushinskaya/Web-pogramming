<?php
$keys = ['sky', 'grass', 'orange'];
$values = ['blue', 'green', 'orange'];
 
$array = array_combine($keys, $values);
print_r($array);

$arrays = [[1, 2], [3, 4], [5, 6]];
 
foreach ($arrays as list($a, $b)) {
    $c = $a + $b;
    echo($c . ', '); 
}
