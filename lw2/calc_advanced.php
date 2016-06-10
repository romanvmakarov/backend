<?php

  $arg1 = "";
  $arg2 = "";
  $operation ="";
  
  if (isset($_GET['arg1']))
  {
    $arg1=$_GET['arg1'];
  }
  else
  {
    echo "arg1 is not set<br />";
  }

  if (isset($_GET['arg2']))
  {
    $arg2=$_GET['arg2'];
  }
  else
  {
    echo "arg2 is not set<br />";
  }
  
  if (isset($_GET['operation']))
  {
    $operation=$_GET['operation'];
  }
  else
  {
    echo "operation is not set<br />";
  }  

  if ($operation == 'div')
  {
    $result = $arg1 / $arg2;
  }

  if ($operation == 'sum')
  {
    $result = $arg1 + $arg2;
  }

  if ($operation == 'sub')
  {
    $result = $arg1 - $arg2;
  }

  if ($operation == 'mul')
  {
    $result = $arg1 * $arg2;
  }


  if (isset($result))
  {
    echo "calculate $operation , argument1 is $arg1 , argument2 is $arg2 , result is $result";  	
  }
  else
  {
    echo "theres no result";
  }  

  
/*
  7. Внесите следующие доработки в задание 6.:
  a) #5 возможность задания математической операции с помощью GET-параметра запроса. Возможные значения: add, sub, mul, div. 

	Пример:
	/calc.php?arg1=10&arg2=15&operation=add

  b) #5 операция вычитание (sub);
  c) #5 операция умножение (mul);
  d) #5 операция деление (div);  
  
*/