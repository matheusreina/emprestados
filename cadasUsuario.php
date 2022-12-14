<?php

  if(isset($_POST['submit'])) {
    include_once("config.php");

    $email = $_POST['email'];
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO users(email,username,senha) 
    VALUES ('$email','$username','$senha')");

    header("Location: login.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Usuários</title>
    <!-- Font awesome icon -->
    <script src="https://kit.fontawesome.com/0e5488de0a.js" crossorigin="anonymous"></script>
    <!-- CSS local -->
    <link rel="stylesheet" href="css\style.css" />
  </head>
  <body>
    <a href="index.html" class="arrowIcon" ><i class="fa-solid fa-chevron-left"></i></a>
    <div class="box">
      <form action="cadasUsuario.php" method="POST">
        <fieldset>
          <legend><b>Cadastro de Usuários</b></legend>
          <br />
          <div class="inputBox">
            <input type="email" name="email" id="email" class="inputUser" required />
            <label class="labelInput" for="email">E-mail</label>
          </div>
          <br><br>
          <div class="inputBox">
            <input type="text" name="username" id="username" class="inputUser" required />
            <label class="labelInput" for="username">Nome de usuário</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required />
            <label class="labelInput" for="senha">Senha</label>
          </div>
          <br /><br />
          <input class="inputSubmit" type="submit" name="submit" />
        </fieldset>
      </form>
    </div>
  </body>
</html>
