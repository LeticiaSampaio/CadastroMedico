<?php include "../templates/header.php"; ?>

<?php require_once ('../controller/EditarHorarioController.php');?>

<?php $horarios = ["16/11/2020 07:00", "16/11/2020 08:00", "16/11/2020 09:00", "16/11/2020 10:00", "16/11/2020 11:00", "16/11/2020 14:00", "17/11/2020 14:00", "17/11/2020 15:00", "18/11/2020 08:00", "18/11/2020 09:00", "18/11/2020 10:00", "19/11/2020 07:00"];?>

<div id="body_wrapper">
    <div class="div_form">
        <h2>Adicionar horários</h2>
        <label for="name" class="label_form">Nome</label>
        <input id="name" name="name" class="input_form" placeholder="Nome">
        <label for="data_hora" class="label_form">Data e Hora</label>
        <input type="datetime-local" id="data_hora" name="data_hora" class="input_form" placeholder="exemplo@dominio.com.br">
        <button class="button button_confirm">Adicionar horário</button>
        <a href="../index.php" class="link_back">Voltar para a Página inicial</a>
    </div>
    <div class="div_form">
        <h2>Horários configurados</h2>
        <table class="horarios_confirgurados">
            <?php foreach($horarios as $value): ?>
            <tr>
                <td><?php echo $value; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>