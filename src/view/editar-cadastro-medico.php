<?php include "../templates/header.php"; ?>

<?php require_once ('../controller/EditarMedicoController.php');?>

<div id="body_wrapper">
    <form class="div_form">
        <h2>Editar médico</h2>
        <label for="name" class="label_form">Nome</label>
        <input id="name" name="name" class="input_form" placeholder="Nome" required>
        <label for="senha_antiga" class="label_form">Senha antiga</label>
        <input type="password" id="senha_antiga" name="senha_antiga" class="input_form" placeholder="Insira a senha antiga" required> 
        <label for="nova_senha" class="label_form">Nova senha</label>
        <input type="password" id="nova_senha" name="nova_senha" class="input_form" placeholder="Escolha uma nova senha forte e segura" required>
        <input type="submit" name="submit" class="button button_confirm" value="Atualizar cadastro">
        <a href="../index.php" class="link_back">Voltar para a Página inicial</a>
    </form>
</div>