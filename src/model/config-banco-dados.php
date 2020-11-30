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
$dbname     = "teste_fc";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );