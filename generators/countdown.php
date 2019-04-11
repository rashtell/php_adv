<?php
function &countdown($limit){
  while($limit >0){
    yield $limit;
  }
}

foreach (countdown(10) as &$value) {
  echo "{$value}\n";
  $value--;
}