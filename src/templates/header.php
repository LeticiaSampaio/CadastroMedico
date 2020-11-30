<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../model/css/style.css" />
    <title>Fácil Consulta</title>
</head>
<body>
    <div id="header_wrapper">
        <a href="../view/cadastro-medico.php" class="button button_sign_in">Cadastro de médico</a>
    </div>
    <?php session_start();
      if( isset($_SESSION['message'])){?>
    <div class="button message">
        <?php echo "<p>".$_SESSION['message']."</p>"; 
          unset($_SESSION['message']);?>
    </div>
    <?php } ?>
</body>
</html>