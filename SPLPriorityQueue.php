<?php
$a = new SplPriorityQueue;
for($i = 0; $i < 5000; $i++) {
    $a->insert($i++, rand(1,10));
    if ($i > 500) {
        $a->extract();
    }   
}
