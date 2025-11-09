<?php
//arrow can access outer scope without need to use
$numbers = [1, 2, 3, 4, 5];
$multiplier = 3;
$ss = function ($number) use ($multiplier) {
  return $number * $multiplier;
};
$squared = fn($input) => $input * $multiplier;
$squareNumbers = array_map($squared, $numbers);
$squareNumbers2 = array_map($ss, $numbers);

var_dump(value: $squareNumbers);
var_dump(value: $squareNumbers2);
// print_r(value: $squareNumbers);
