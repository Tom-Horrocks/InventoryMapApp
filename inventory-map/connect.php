<?php

    $hostname = 'localhost';
    $db_name = 'test';
    $db_user = 'root';
    $db_password = '';

    try{
        $conn = new PDO("mysql:host=$hostname;dbname=$db_name", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        //echo "Connection failed: " ;
      }
      return $conn;
   
?>
