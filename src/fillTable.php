<?php

require "model/config-banco-dados.php";

try {
    $connection = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * FROM horario";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $horarios = $statement->fetchAll();

    if(empty($horarios)){
      $sql = file_get_contents("../banco-dados/banco-dados.sql");
      $connection->exec($sql);
    }
  
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }