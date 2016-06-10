<?php
  $name = "";
  if (isset($_GET['name']))
  {
    $name=$_GET['name'];
    echo "Hello, Dear $name!";
  }
  else
  {
    echo "Please give me your name via string parameter 'name'. Use this:";
    echo "<br />";
    echo "/print_name.php?name=yourname";
  }
  
/*
  5. Напишите PHP приложение print_name.php, которое выводит сообщение "Hello, Dear <Name>!".
  #10 <Name> заменяется на значение параметра name, переданного в GET запросе.
  
  Пример:
  
  Запрос
  HTTP 1.1 GET /print_name.php?name=Sarah
  
  Ответ
  Content-Type: text/plain
  Hello, Dear Sarah!
*/

