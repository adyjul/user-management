<?php

$files = glob(dirname(__FILE__) . "/*.php");

foreach ($files as $file) {
    $path_parts = pathinfo($file);
    if (!in_array($path_parts['basename'], array('.', '..', 'index.php'))) {
        include  $path_parts['basename'];
    }
};
