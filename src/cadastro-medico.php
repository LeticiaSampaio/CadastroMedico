<?php include "templates/header.php"; ?>

<div id="body_wrapper">
    <h2>Cadastro de médico</h2>
    <form method="post" class="div_form">
        <label for="name" class="label_form">Nome</label>
        <input type="text" id="name" name="name" class="input_form" placeholder="Insira o nome do profissional">
        <label for="email" class="label_form">E-mail</label>
        <input type="text" id="email" name="email" class="input_form" placeholder="exemplo@dominio.com.br">
        <label for="senha" class="label_form">Senha</label>
        <input type="text" id="senha" name="senha" class="input_form" placeholder="Escolha uma senha forte e segura">
        <submit type="submit" name="submit" value="submit" class="button_confirm">Realizar cadastro</submit>
    </form>
    <a href="index.php" class="link_back">Voltar para a Página inicial</a>
</div>