<?php
/* 
  3. Разработайте PHP приложение print_hello_html.php. Сделайте, чтобы сообщение 
  #5 "Hello HTML World!" выводилось в формате text/html. 
  Сообщение должно располагаться внутри HTML тэга H1.
*/

  header("Content-type: text/html");
  $headerText = "Hello HTML World!";
  echo "<H1>$headerText</H1>";
  
/*
  Определите отличие заголовков ответа сервера для программы PrintHelloHTML от PrintHello.
  print_hello.php Response Header:
    Content-Type:text/plain;charset=UTF-8
  print_hello_HTML_world Response Header:
    Content-Type:text/html;charset=UTF-8
  difference is:
    text/plain vs text/html
*/