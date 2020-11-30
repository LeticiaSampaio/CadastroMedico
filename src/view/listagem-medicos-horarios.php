<?php if(isset($_POST['doctors'])){
    foreach($_POST['doctorsNames'] as $key => $value){?>
        <form class="div_doctor" action="../controller/ListagemController.php" method="post">

            <h2 class="name_title"><?php echo $value['nome']; ?></h2>

            <input type="submit" name="edit" class="button_config" value="Editar cadastro">
            <input type="submit" name="config" class="button_config" value="Configurar Horário">

            <div class="grid_even">
            <?php foreach($_POST['doctors'] as $key => $appointments){
                if($value['id']==$appointments['id_medico']){
                    $date = date_create($appointments['data_horario']);
                    $appointment = date_format($date, 'd/m/Y à\s H:i');

                    if($appointments['horario_agendado']=='1'){?>
                    <input type="submit" name="appointment" class="booked button_appointment" value="<?php echo $appointment; ?>">
                    <?php } else{?>
                        <input type="submit" name="appointment" class="button_appointment" value="<?php echo $appointment; ?>">
                    <?php } ?>
                    
                <?php }
            } ?>
            </div>
        </form>
    <?php } ?>
<?php } ?>