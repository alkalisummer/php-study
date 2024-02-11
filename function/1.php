<?php
$test = "테스트";
function numbering($param = 0){
  global $test;
  while($param < 10){
    echo $param;
    $param += 1;
  }
  echo $test;
}
numbering(1);
?>