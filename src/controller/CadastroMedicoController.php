<?php

class CadastroMedicoController {

    public function save(){
        //Lógica para salvar o cadastro médico

        if (isset($_POST['submit'])) {
            require "../model/config-banco-dados.php";
            require "../common.php";
          
            try {
              $connection = new PDO($dsn, $username, $password, $options);
          
              $new_user = array(
                "nome" => $_POST['name'],
                "email"     => $_POST['email'],
                "senha"       => $_POST['password']
              );
          
              $sql = sprintf(
          "INSERT INTO %s (%s) values (%s)",
          "medico",
          implode(", ", array_keys($new_user)),
          ":" . implode(", :", array_keys($new_user))
              );
          
              $statement = $connection->prepare($sql);
              $statement->execute($new_user);
            } catch(PDOException $error) {
              echo $sql . "<br>" . $error->getMessage();
            }
          
          }
    }

}