<?php
function priority_sort($a,$b) {
    return $a[1]-$b[1];
}
$a = array();
for($i = 0; $i < 5000; $i++) {
    $a[] = array($i, rand(1,10));
    usort($a, 'priority_sort');
    if ($i > 500) {
        array_shift($a);
    }   
}
