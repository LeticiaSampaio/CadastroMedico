<?php

require "model/config-banco-dados.php";

try {
    $connection = new PDO("mysql:host=$host;", $username, $password, $options);
    $sql = file_get_contents("../banco-dados/init.sql");
    $connection->exec($sql);
  
  } catch(PDOException $error) {
    
  }