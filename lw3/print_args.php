<?php
  $quantity = $argc - 1;
  if ($quantity != 0)
  {
    echo "Number of arguments: $quantity".PHP_EOL;
    echo "Arguments: ";
    for ($i = 1; $i < $argc; $i++)
    {
      echo "$argv[$i] ";
    }
  }
  else
  {
    echo "No parameters were specified!";
  }
  
/*
  1. (#5) Напишите PHP-скрипт print_args.php, выполняющий вывод параметров, переданных в качестве аргументов командной строки, а также их количество. 
  Программа должна корректно обрабатывать ситуацию, когда параметры не были указаны. В этом случае выводится информационное сообщение “No parameters were specified!”.
  Внимание! Данная программа запускается из командной строки, а не из браузера.

  Пример:
  php print_args.php Hello World!

  Вывод:
  Number of arguments: 2
  Arguments: Hello World!
*/