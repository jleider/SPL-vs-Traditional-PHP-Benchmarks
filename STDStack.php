<?php
$a = array();
for($i = 0; $i < 5000; $i++) {
    $a[] = $i;
}
for($i = 0; $i < 5000; $i++) {
    array_pop($a);
}
