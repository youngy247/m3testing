<?php

require_once 'misclib.php';

$result = multiplyByTwo(0);

if ($result !=0){
    echo 'Invalid operation';
}

$result = multiplyByTwo(-1);

try {$result = multiplyByTwo( -1);
}
catch (InvalidArgumentException $exception){
    echo 'Invalid operation';
}
