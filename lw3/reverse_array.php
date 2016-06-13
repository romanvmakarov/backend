<?php
  $positionCounter=0;
      
    if (isset($_GET['arr']))
    {
        $incomingData = $_GET['arr'];
        if ($incomingData != null)
        {
            $array = explode(',', $incomingData);
            $arrayLenght = count($array);        

            while($positionCounter <= $arrayLenght / 2 - 1) 
            {
              $exchangePosition = $arrayLenght - $positionCounter - 1;
              $changingVariableFirst = $array[$positionCounter];
              $changingVariableSecond = $array[$exchangePosition];
              $array[$positionCounter] = $changingVariableSecond;
              $array[$exchangePosition] = $changingVariableFirst;
              $positionCounter = $positionCounter + 1;    
            }
            print_r ($array);
        }
        else
        {
            header('HTTP/1.1 400 Empty array data');
        }
    }
    else
    {
        header('HTTP/1.1 400 Theres no incoming array');
    }

/*
  5. (#20) Разработайте PHP-скрипт reverse_array.php, выполняющий реверсирование одномерного массива произвольной длины и вывод результата в браузер пользователя. 
  Входной массив передается как строчный GET-параметр arr. Значения внутри строки отделены символом-разделителем запятой.
  Программа должна корректно обрабатывать ситуации, когда параметр arr отсутствует, или задан неверно. В этом случае сервер возвращает код ответа 400.
  Для получения массива из строки используйте функцию explode.
  Ограничения:
  Нельзя использовать встроенные средства языка для реверса массива;
  Нельзя использовать функцию echo для вывода значения.

  Пример:
  /reverse_array.php?arr=1,2,3,4,5
  Ответ:
  Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
*/
