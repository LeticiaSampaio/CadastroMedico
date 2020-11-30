<?php 

include "../templates/header.php"; 
require_once ('../controller/CadastroMedicoController.php');

?>

<div id="body_wrapper">
    <form action="../controller/CadastroMedicoController.php" method="post" class="div_form">
      <h2>Cadastro de médico</h2>
      <label for="name" class="label_form">Nome</label>
      <input type="text" id="name" name="name" class="input_form" placeholder="Insira o nome do profissional" required>
      <label for="email" class="label_form">E-mail</label>
      <input type="email" id="email" name="email" class="input_form" placeholder="exemplo@dominio.com.br" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" required>
      <label for="senha" class="label_form">Senha</label>
      <input type="password" id="password" name="password" class="input_form" placeholder="Escolha uma senha forte e segura" required>
      <button type="submit" name="submit" value="submit" class="button button_confirm">Realizar cadastro</button>
      <a href="../index.php" class="link_back">Voltar para a Página inicial</a>
    </form>
</div>