<?php
  function last($str) 
  {
    $array = str_split($str);
    $lastSymbol = array_pop($array);
    return $lastSymbol;   	
  }

  function withoutLast($str) 
  {
    $array = str_split($str);
    $lastSymbol = array_pop($array);
    $withoutLast = implode ($array);
    return $withoutLast;   
  }


/*
  2.  Разработайте функцию last($str). 
  #10 Функция last принимает строку символов и возвращает лишь последний символ 
  из этой строки.
  Функция должна размещаться в файле string.inc.php
  
  3.  Разработайте функцию withoutLast($str).
  #10 Функция withoutLast принимает строку и возвращает ту же самую строку
  без последнего символа. 
  Функция должна размещаться в файле string.inc.php
  Для проверки функции разработайте программу without_last.php  
  
  
*/