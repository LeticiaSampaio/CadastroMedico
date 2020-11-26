<?php $horarios1 = ["16/11/2020 às 07:00", "16/11/2020 às 08:00", "16/11/2020 às 09:00", "16/11/2020 às 10:00", "16/11/2020 às 11:00", "16/11/2020 às 14:00", "17/11/2020 às 14:00", "17/11/2020 às 15:00", "18/11/2020 às 08:00", "18/11/2020 às 09:00", "18/11/2020 às 10:00", "19/11/2020 às 07:00"];?>
<?php $horarios2 = ["16/11/2020 às 07:30", "16/11/2020 às 08:30", "16/11/2020 às 09:30", "16/11/2020 às 10:30", "16/11/2020 às 11:30", "16/11/2020 às 14:30", "17/11/2020 às 14:30", "17/11/2020 às 15:30", "18/11/2020 às 08:30", "18/11/2020 às 09:30", "18/11/2020 às 10:30", "19/11/2020 às 07:30"];?>

<div class="div_doctor">
    <h2 class="name_title">Dr. João Augusto de Alcântara</h2>
    <a href="view/editar-cadastro-medico.php" class="button_config">Editar cadastro</a>
    <a href="view/adicionar-remover-horario.php" class="button_config">Configurar Horário</a>
    <div class="grid_even">
        <?php foreach($horarios1 as $value): ?>
            <button class="button_appointment">
                <?php echo $value; ?>
            </button>
        <?php endforeach; ?>
    </div>
</div>
<div class="div_doctor">
    <h2 class="name_title">Dra. Simone da Silva</h2>
    <a href="view/editar-cadastro-medico.php" class="button_config">Editar cadastro</a>
    <a href="view/adicionar-remover-horario.php" class="button_config">Configurar Horário</a>
    <div class="grid_even">
        <?php foreach($horarios2 as $value): ?>
            <button class="button_appointment">
                <?php echo $value; ?>
            </button>
        <?php endforeach; ?>
    </div>
</div>