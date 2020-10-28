<?php

include 'MyIterator.php';

$data = array(1, 2, 3, 4, 5);
$c = new MyIterator($data);

foreach ($c as $key => $row) {
    echo $key, ' ', $row, PHP_EOL;
}

