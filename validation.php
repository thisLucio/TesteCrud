<?php

function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
 
    return $PDO;
}
function isLoggedIn()
      {
          if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
          {
              return false;
          }
       
          return true;
      }
?>