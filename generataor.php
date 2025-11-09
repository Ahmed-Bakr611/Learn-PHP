<?php

function nonGenereatorCountDown(int $start, int $min = 1, int $max = 100): array
{
  $result = [];
  for ($i = $start; $i > 0; $i--) {
    $result[] = random_int($min, $max);
  }
  return $result;
}


function countDown(int $start, int $min = 1, int $max = 100): Generator
{
  for ($i = $start; $i > 0; $i--) {
    echo "Generatin Number..\n";
    yield random_int($min, $max);
  }
}

foreach (countDown(5) as $i) {
  echo "$i\n";
}
