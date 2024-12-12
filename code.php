<?php
echo 'Введите два числа :' . PHP_EOL;
$stdin = fopen('php://stdin', 'r');
$namber = fgets($stdin);
$namber2 = fgets($stdin);
fclose($stdin);

if ($namber2 == 0) {
    fwrite(STDERR, "На ноль делить нельзя" . PHP_EOL); 
} elseif (is_numeric($namber)and is_numeric($namber2)) {
    echo "Результат: " . $namber / $namber2 . PHP_EOL;
} else {
    fwrite(STDERR, "Ввeдите, пожалуйста, число" . PHP_EOL);
} 