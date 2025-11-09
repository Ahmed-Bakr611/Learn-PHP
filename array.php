<?php
$arr = [1, 2, 3, 4, 5];
$asociatveArr = [
  'name' => 'jhon',
  'age' => 30,
  'city' => 'New York'
];
echo $arr[0];
echo $asociatveArr['name'];


//PUSH
$arr[] = 6;
$asociatveArr['countr'] = 'Egypt';

//matrix
$matrix = [
  [1, 2, 3],
  [4, 5, 6]
];
echo $matrix[0][0];



//sorting
$fruits = ['apple', 'banana', 'orange'];
echo "\n---------Sorting 1D Array---------------\n";
var_dump(count($fruits));
//sort (Ascending)
sort($fruits);
var_dump($fruits);
//reverse sort (Descending)
rsort($fruits);
var_dump($fruits);


echo "\n---------Sorting Associative Array---------------\n";
var_dump(count($asociatveArr));
//sort by value
asort($asociatveArr);
var_dump($asociatveArr);
//sort by key
ksort($asociatveArr);
var_dump($asociatveArr);



$numbers = range(1, 5);
var_dump($numbers);
$squared = array_map(fn($n) => $n * $n, $numbers);
var_dump($squared);
$evenNumbers = array_filter($numbers, fn($n) => !($n & 1));
var_dump($evenNumbers);


$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item, 0);
var_dump($sum);

//array destructure and spread
$newArr = [1, 2, ...$numbers];
var_dump($newArr);
[$x, $y] = $numbers;
var_dump($x, $y);


$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];
var_dump(
  array_intersect($set1, $set2),
  array_intersect($set2, $set1),
  array_diff($set1, $set2)
);


$keys = array_keys($asociatveArr);
$values = array_values($asociatveArr);
$formatedKeys = array_map(fn($key) => ucfirst($key), $keys);
var_dump($keys, $values, $formatedKeys);
var_dump(array_key_exists('name', $asociatveArr));
var_dump(array_merge($numbers, $asociatveArr));
var_dump($numbers + $asociatveArr);
var_dump([...$numbers, ...$asociatveArr]);
var_dump(array_search('banana', $fruits));
