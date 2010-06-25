<?php
$a = new SplMaxHeap; 
for($i = 0; $i < 5000; $i++) {
    $a->insert(rand(1, 5000));
}
for($i = 0; $i < 5000; $i++) {
    $a->extract();
}
