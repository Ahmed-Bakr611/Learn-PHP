<?php
declare (strict_types = 1);
function add(int $a,int $b):int {
  return $a+$b;
}

function team($name,...$members){
  echo $name;
  echo implode(" , ",$members);
}
team("ahmed",10,"soso","kk",100);
