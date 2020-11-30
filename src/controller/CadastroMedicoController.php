<?php

class CadastroMedicoController {

  public function save(){

      require "../model/config-banco-dados.php";
      require "../common.php";
    
      try {
        $connection = new PDO($dsn, $username, $password, $options);
    
        $new_doctor = [
          "nome" => $_POST['name'],
          "email" => $_POST['email'],
          "senha" => $_POST['password']
        ];
    
        $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "medico",
        implode(", ", array_keys($new_doctor)),
        ":" . implode(", :", array_keys($new_doctor))
        );
    
        $statement = $connection->prepare($sql);
        $statement->execute($new_doctor);
        session_start();
        $_SESSION['message'] = 'Cadastro realizado.';
        header("Location: ../view/cadastro-medico.php");

      } catch(PDOException $error) {
        $_SESSION['message'] = 'Falha ao realizar cadastro.';
        header("Location: ../view/cadastro-medico.php");
      } 
  }// end save
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $doctor = new CadastroMedicoController;
  $doctor->save($_POST);
}