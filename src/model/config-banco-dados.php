<?php

/*
* É recomendado que as configurações de conexão com o Banco de Dados seja nesse arquivo.
* Veja o exemplo:
*/

// define("DB_HOST", "localhost");
// define("DB_NAME", "teste_fc");
// define("DB_USER", "root");
// define("DB_PASS", "");

$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "test_fc"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );