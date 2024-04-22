<?php

   $host='localhost';
   $db='hotel';
   $user= 'root';
   $pass='';
   $charset= 'utf8mb4';

   $dsn= "mysql:host=$host; dbname=$db; charest=$charset ";

   try{
      $pdo = new PDO($dsn,$user, $pass);
     
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERR_NONE);
  
    }catch(PDOException $e){
      throw new PDOException($e->getMessage());
   }
   
    require_once 'crud.php';
    $crud = new crud($pdo);
    
    $conn = mysqli_connect($host, $user, $pass, $db);
?>