<?php
$name = "Ahmed\n";
$nn = 'Ahmed\n';
$heroDoc = <<<EOD
Multi Line Strin
With Variablle $name
EOD;
$nowDoc = <<<'EOD'
Multi Line Strin
With Variablle $name
EOD;
// echo $heroDoc;
// echo $nowDoc;

$str = 'Hello World!!';
echo substr($str, -3) . "\n";
echo ucfirst(strtolower(string: $str));
echo "\n";
foreach (explode(' ', $str,) as $item) {
  echo ucfirst(strtolower(string: $item)) . " ";
}
echo "\n----------Search-----------\n";
$haystack = "The Quick Brown Fox";
$pos = strpos($haystack, "Quick");
var_dump($pos);
var_dump(str_replace("Quick", "Slow", $haystack));

echo "\n----------RegEXP-----------\n";

preg_match_all('/\w{5}/', $haystack, $matches);
var_dump($matches);

echo "\n----------Format-----------\n";
$x = "Ahmed";
$y = 30;
printf("%s is %d years old.", $x, $y);

echo "\n----------Convert-----------\n";
$csv = "apple,banana,cherry";
$fruits = explode(',', $csv);
var_dump($fruits);
var_dump(implode(',', $fruits));

echo "\n----------Padding-----------\n";
$padded = str_pad("Hello", 11, "-", STR_PAD_BOTH);
var_dump($padded);
$trim = trim("  ciao ");
var_dump($trim);
