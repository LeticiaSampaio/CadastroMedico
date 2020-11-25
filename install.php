<?php

require "src/model/config-banco-dados.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("banco-dados/init.sql");
    $connection->exec($sql);
  
    echo "Database and table users created successfully.";
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }