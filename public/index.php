<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$number = $_GET['number'] ?? null;
$number = is_numeric($number) ? (int) $number : null;

$helloed = match (true) {
    ! is_int($number) => 'mundo',
    is_even($number) => 'par',
    default => 'impar',
};

echo "Hola, $helloed";
