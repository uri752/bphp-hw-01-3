<?php

$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

// 1 - вариант с использованием if-else
if (is_bool($variable)) {
    $type = "bool";
} elseif (is_float($variable)) {
    $type = "float";
} elseif (is_int($variable)) {
    $type = "int";
} elseif (is_string($variable)) {
    $type = "string";
} elseif (is_null($variable)) {
    $type = "null";
} else {
    $type = "other";    
}

echo "if-else: type is $type \n";

// 2 - вариант с использованием switch
$variable = true;
switch(true) {
    case is_bool($variable): 
        $type = "bool";
        break;
    case is_float($variable):
        $type = "float";
        break;
    case is_int($variable):
        $type = "int";
        break;
    case is_string($variable): 
        $type = "string";
        break;
    case is_null($variable):
        $type = "null";
        break;
    default:
        $type = "other";    
}

echo "switch-case: type is $type \n";