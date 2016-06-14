<?php
  require_once('inc/common.inc.php');
  if (isset($_GET['str']))
  {
    $str = $_GET['str'];
    if ($str != null)
    {
      echo revers($str);
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