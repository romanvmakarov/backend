<?php
  require_once('inc/common.inc.php');
  if (isset($_GET['str']))
  {
    $str = $_GET['str'];
    if ($str != null)
    {
      echo withoutLast($str);
    }
    else
    {
      header('HTTP/1.1 400 Theres no data in parameter');
    }
  }
  else
  {
    header('HTTP/1.1 400 Theres no parameter');
  }
    
/*
  3.  Разработайте функцию withoutLast($str).
  #10 Функция withoutLast принимает строку и возвращает ту же самую строку
  без последнего символа. 
  Функция должна размещаться в файле string.inc.php
  Для проверки функции разработайте программу without_last.php
*/