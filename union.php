<?php

declare(strict_types=1);

function processInput(int|float|string $input): string
{
  return match (true) {
    is_int($input) => "Integer: " . ($input * 2),
    is_float($input) => "Float: " . round($input, 2),
    is_string($input) => "String: " . strtoupper($input),
    default => "unknown type",
  };
}

$inputs = [
  42,
  3.14,
  "Hello",
  7,
  2.834,
  "world"
];
foreach ($inputs as $input) {
  echo processInput($input);
  echo ("\n-------------------\n");
}
