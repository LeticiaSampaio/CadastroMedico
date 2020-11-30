<?php

class ListagemController {

    public function show(){
        try {
            require "model/config-banco-dados.php";
            
            $connection = new PDO($dsn, $username, $password, $options);
    
            $sql = "SELECT id, id_medico, data_horario, horario_agendado FROM horario";
            
            $statement = $connection->prepare($sql);
            $statement->execute();
            
            $result = $statement->fetchAll();
    
            //Salva os horarios de consulta disponíveis de todos os médicos
            $_POST['doctors'] = $result;
            
            $arrayIds = [];
            foreach($result as $key => $value){
                if(!in_array($value['id_medico'], $arrayIds)){
                    array_push($arrayIds, $value['id_medico']);
                }
            }
            $in = join(',', $arrayIds);
            $sql = "SELECT id, nome FROM medico WHERE id IN($in)";
    
            $statement = $connection->prepare($sql);
            $statement->execute();
            
            $doctorsNames = $statement->fetchAll();
    
            //Salva os nomes dos medicos disponíveis
            $_POST['doctorsNames'] = $doctorsNames;
    
            } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }

    public function setAppointment(){
        try {
            require "../model/config-banco-dados.php";
            $connection = new PDO($dsn, $username, $password, $options);
            
            $appointment = str_replace(' às ', ' ', $_POST['appointment']);

            $date = date_create_from_format('d/m/Y H:i', $appointment);
            $date = date_format($date, 'Y-m-d H:i:s');

            $sql = "UPDATE horario SET horario_agendado='1' WHERE data_horario='$date';";
            
            $statement = $connection->prepare($sql);
            $statement->execute();
            
            $_SESSION['message'] = 'Horario reservado';
            header("Location: ../index.php");
    
            } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }

    public function editRegister(){
        //Lógica para ir para página de edição do cadastro médico
        header("Location: ../view/editar-cadastro-medico.php");
    }

    public function changeAppointment() {
        //Lógica para ir para página de edição das consultas marcadas
        header("Location: ../view/adicionar-remover-horario.php");
    }
}

$action = new ListagemController;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['edit'])){
        $action->editRegister();
    }elseif(isset($_POST['config'])){
        $action->changeAppointment();
    }elseif(isset($_POST['appointment'])){
        $action->setAppointment();
    }else{
        echo "error";
    }
}
// if($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo $_GET['id'];
//     $action->editRegister();
// }
$action->show();