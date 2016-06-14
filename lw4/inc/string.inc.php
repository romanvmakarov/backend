<?php
  function last($str) 
  {
    $array = str_split($str);
    $lastSymbol = array_pop($array);
    return $lastSymbol;   	
  }

/*
  2.  Разработайте функцию last($str). 
  #10 Функция last принимает строку символов и возвращает лишь последний символ 
  из этой строки.
  Функция должна размещаться в файле string.inc.php
*/