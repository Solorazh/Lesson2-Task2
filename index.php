<?php

$namber = trim(fgetc(STDIN));
$namber2 = trim(fgetc(STDIN));

if (is_int($namber && $namber2)) {
    fwrite(STDOUT, "Результат:" . $namber / $namber2 . PHP_EOL);
} 
else {
    fwrite(STDERR, "Ввeдите, пожалуйста, число" . PHP_EOL);
    
    if ($namber === 0) {
        fwrite(STDERR, "На ноль делить нельзя" . PHP_EOL); 
    }
}


