<?php
  $haystack = array
  (
  'клавиатура' => 'keyboard'
  );
  $flippedhaystack=array_flip($haystack);
  
  if (isset($_GET['word']))
  {
    $needle = $_GET['word'];
    echo "Запрашивается перевод для слова: $needle <br />";
    $match = array_search($needle, $haystack);
    $matchinflipped = array_search($needle, $flippedhaystack);
    
    if ($match == true)
    {
      echo "Перевод: $match";
    }
    else
    {
      if ($matchinflipped == true)
      {
        echo "Перевод: $matchinflipped";
      }
      else
      {
      header('HTTP/1.1 404');
      echo "Для такого слова перевод неизвестен.";
      echo "\n";
      }
    }
  }
  else
  {
    header('HTTP/1.1 400');
    echo "Не передано слово для перевода.";    
  }







/*
  4. (#15) Разработайте PHP-скрипт translator.php – переводчик с английского языка на русский. Слово для перевода задается в GET-параметре word. Все переводы хранятся прямо в коде скрипта. Программа должна корректно обрабатывать ситуации, когда параметр word отсутствует, или задан неверно. В этом случае сервер возвращает код ответа 400.
  В случае, если запрошен перевод неизвестного слова, возвращается код ответа 404.

  Пример:
  /translator.php?word=Keyboard

  Ответ:
  Клавиатура

  3.1 (#5) (Выполнение не обязательно).  Добавьте возможность перевода с русского на английский. При этом скрипт все также должен принимать один параметр word.
*/