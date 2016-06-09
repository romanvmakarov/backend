<?php
  /* 
  3. Разработайте PHP приложение print_hello_html.php. Сделайте, чтобы сообщение 
  #5 "Hello HTML World!" выводилось в формате text/html. 
  Сообщение должно располагаться внутри HTML тэга H1.
  */

  header("Content-type: text/html");
  $headerText = "Hello HTML World!";
  echo "<H1>$headerText</H1>";
  
  