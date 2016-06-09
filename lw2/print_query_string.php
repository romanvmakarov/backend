<?php
    header('Content-Type: text/plain');
    $queryString = $_SERVER['QUERY_STRING'];
    echo "Query string =\n'$queryString'";
    
/*
  Напишите PHP приложение print_query_string.php, которое выводит данные переданные 
  #5 в запросе. 

  Пример:
  Запрос
  HTTP 1.1 GET /print_query_string.php?my_name=Sarah&my_surname=Rever&message=British+are+coming+by+sea.

  Ответ
  Content-Type: text/plain
  Query string = 'my_name=Sarah&my_surname=Rever&message=British+are+coming+by+sea.'
  
  */