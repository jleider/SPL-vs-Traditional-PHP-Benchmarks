<?php
$a = new SplStack; 
for($i = 0; $i < 5000; $i++) {
    $a[] = $i;
}
for($i = 0; $i < 5000; $i++) {
    $a->pop();
}
