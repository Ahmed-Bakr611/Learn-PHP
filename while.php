<?php


$attempts = 0;
$secret = "Magic";
$maxAttempts = 5;
$winner = false;
while (!$winner && $attempts < $maxAttempts) {
  echo "Guess The Password : ";
  $guess = trim(fgets(STDIN));
  $winner = strcasecmp($guess, $secret) === 0;
  $attempts++;
}
if($winner) echo "You Correctly Guess";
else echo "You Miss The Guess in 5 Trials allowed";
