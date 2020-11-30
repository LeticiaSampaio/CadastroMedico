<?php 

include "templates/header.php";
require_once ('install.php');
require_once ('fillTable.php');
require_once ('controller/ListagemController.php');

?>

<div id="body_wrapper">
    <?php  
        include 'view/listagem-medicos-horarios.php';
    ?>
</div>