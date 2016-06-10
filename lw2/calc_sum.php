<?php

  $arg1 = "";
  $arg2 = "";

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

  $result = $arg1 + $arg2;

  echo $arg1;
  echo " plus ";
  echo $arg2;
  echo " is ";
  echo $result;
  
/*
  6.  Напишите PHP приложение calc_sum.php, которое вычисляет сумму чисел, переданных в запросе GET.
  #10 Параметры запроса arg1 и arg2.
  Например, 
  /calc_sum.php?arg1=10&arg2=15
  Выведет на экран число 25.
*/