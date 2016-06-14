<?php
  require_once('include/common.inc.php');
  if (isset($_GET['str']))
  {
    $str = $_GET['str'];
    if ($str != null)
    {
      echo last($str);
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
  2.  Разработайте функцию last($str). 
  #10 Функция last принимает строку символов и возвращает лишь последний символ 
  из этой строки.
  Функция должна размещаться в файле string.inc.php

  Для проверки функции разработайте программу /last.php
  В GET-параметре str передается значение исходной  строки.
  Необходимо учесть, что 1) параметр может быть не передан, 
  2) строка может быть пустой.
*/