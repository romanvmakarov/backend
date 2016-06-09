<?php
/*
  1. Напишите PHP-скрипт print_hello.php, которое выводит сообщение "Hello World!"
  #5 в формате text/plain.
*/

  header("Content-type: text/plain");
  echo "Hello World!";
    
/*
  2. Определите заголовки запроса браузера и ответа сервера при запросе 
  #5 приложения PrintHello.

  Request URL:http://localhost/lw2/print_hello.php
  Request Method:GET
  Status Code:200 OK
  Remote Address:[::1]:80
  
  Request Headers:
  Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,;q=0.8
  Accept-Encoding:gzip, deflate, sdch
  Accept-Language:ru,en-US;q=0.8,en;q=0.6
  Cache-Control:no-cache
  Connection:keep-alive
  Cookie:gsScrollPos=
  DNT:1
  Host:localhost
  Pragma:no-cache
  Upgrade-Insecure-Requests:1
  User-Agent:Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/50.0.2661.102 Chrome/50.0.2661.102 Safari/537.36  
  
  Response Headers:
  Connection:Keep-Alive
  Content-Length:12
  Content-Type:text/plain;charset=UTF-8
  Date:Thu, 09 Jun 2016 07:09:31 GMT
  Keep-Alive:timeout=5, max=100
  Server:Apache/2.4.18 (Ubuntu)
  
*/