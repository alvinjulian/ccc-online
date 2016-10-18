<?php
//Authentication Required

     define('_HOST_NAME','localhost');
     define('_DATABASE_NAME','ccc-online');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');
 
     $mysqli = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
     if($mysqli->connect_errno)
     {
       die("ERROR : -> ".$mysqli->connect_error);
     }

     return $mysqli;
?>