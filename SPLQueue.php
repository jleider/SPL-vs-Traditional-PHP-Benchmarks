<?php
$a = new SplQueue; 
for($i = 0; $i < 5000; $i++) {
    $a[] = $i;
}
for($i = 0; $i < 5000; $i++) {
    $a->dequeue();
}
