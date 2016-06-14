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

  function revers($str)
  {
    $positionCounter=0;
    $array = str_split($str);
    $arrayLenght = count($array);        
    while($positionCounter <= $arrayLenght / 2 - 1) 
    {
      $exchangePosition = $arrayLenght - $positionCounter - 1;
      $changingVariableFirst = $array[$positionCounter];
      $changingVariableSecond = $array[$exchangePosition];
      $array[$positionCounter] = $changingVariableSecond;
      $array[$exchangePosition] = $changingVariableFirst;
      $positionCounter = $positionCounter + 1;    
    }
    return implode($array);
  };


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

  4.  Разработайте функцию revers($str).
  #10 Функция принимает строку в качестве параметра. 
  Возвращает строку, состоящую из тех же символов, что и исходная строка, но
  символы идут в обратном порядке.
  Для решения этой задачи не используйте встроенные в язык PHP функции работы      со строками (такие как reverse например)
  Для проверки функции разработайте программу reverse.php  
*/