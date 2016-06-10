<?php
  $quantity = $argc - 1;
  if ($quantity == 0)
  {
    echo "No argument. Please specify character argument to remove duplicates.";
  }
  elseif ($quantity > 1)
  {
    echo "Incorrect number of arguments! Specify only one argument.";
  }
  else
  {
    $processedArray = $argv[1]; // получаем первый элемент массива строки переданных символов
    $processedArray = str_split($processedArray); // превращаем строку символов в массив
    $processedArray = array_unique($processedArray); // используем готовую функцию - возвращает массив без повторяющихся значений
    $processedArray = implode($processedArray); // собираем массив обратно в строку
    echo "$processedArray";
  }

  echo "\n";


/*
  3. (#10) Разработайте PHP-скрипт remove_duplicates.php, который удалит все повторяющиеся символы из переданной строки. Входные данные задаются как аргумент командной строки. В случае, если аргумент не задан, или заданы лишние, программа должна вывести информационное сообщение.
  Пример:

  php remove_duplicates.php Hello World
  Incorrect number of arguments! 
  Usage php remove_duplicates.php <input string>

  php remove_duplicates.php “Hello World !!”
  Helo Wrd!
*/