<?php

require_once 'misclib.php';

$result = multiplyByTwo(0);

if ($result !=0){
    echo 'Invalid operation';
}


try {
    $result = multiplyByTwo( -1);
    echo 'Invalid operation with argument -1';
} catch (InvalidArgumentException $exception){
    echo 'valid operation with argument -1';
}
echo '<p></p>';
try {
    $result = multiplyByTwo( 'hello');
    echo 'Invalid operation with argument "hello"';
} catch (TypeError $exception){
    echo 'valid operation with argument hello';
} catch (Error $exception) {
    echo 'Invalid operation with argument "hello"';
}
