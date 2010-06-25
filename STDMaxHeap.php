<?php
$a = array();
for($i = 0; $i < 5000; $i++) {
    $a[] = rand(1, 5000);
    rsort($a);
}
for($i = 0; $i < 5000; $i++) {
    array_shift($a);
}
