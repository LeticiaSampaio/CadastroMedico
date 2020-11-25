<?php include "templates/header.php"; ?>

<div id="body_wrapper">
    <h2>Editar médico</h2>
    <form class="div_form">
        <label for="name" class="label_form">Nome</label>
        <input id="name" name="name" class="input_form" placeholder="Nome">
        <label for="senha_antiga" class="label_form">Senha antiga</label>
        <input id="senha_antiga" name="senha_antiga" class="input_form" placeholder="Insira a senha antiga">
        <label for="nova_senha" class="label_form">Nova senha</label>
        <input id="nova_senha" name="nova_senha" class="input_form" placeholder="Escolha uma nova senha forte e segura">
        <submit type="submit" name="submit" value="submit" class="button_confirm">Atualizar cadastro</submit>
    </form>
    <a href="index.php" class="link_back">Voltar para a Página inicial</a>
</div>