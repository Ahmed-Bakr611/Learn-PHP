<?php
//Global
//Local 
//Static 
$name = "Ahmed";

function greet() {
  global $name;
  echo "hello $name\n";
}

function myFun(){
  static $visitors = 0;
  $visitors++;
  echo "#visistors = $visitors\n"; 
}


greet();
myFun();
myFun();
myFun();
myFun();