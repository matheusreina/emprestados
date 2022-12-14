<?php

  if(!empty($_GET['id'])) {
    include_once("config.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM users WHERE id='$id'";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0) {
      while($user_data = mysqli_fetch_assoc($result)){
        $email = $user_data['email'];
        $username = $user_data['username'];
        $senha = $user_data['senha'];
      }

    } else {
      header("Location: sistema.php");
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Coisas</title>
    <!-- Font awesome icon -->
    <script src="https://kit.fontawesome.com/0e5488de0a.js" crossorigin="anonymous"></script>
    <!-- CSS local -->
    <link rel="stylesheet" href="css\style.css" />
  </head>
  <body>
    <a href="sistema.php" class="arrowIcon" ><i class="fa-solid fa-chevron-left"></i></a>
    <div class="box">
      <form action="saveUserEdit.php" method="POST">
        <fieldset>
          <legend><b>Mudar cadastro</b></legend>
          <br />
          <div class="inputBox">
            <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required />
            <label class="labelInput" for="email">E-mail</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input type="text" name="username" id="username" class="inputUser" value="<?php echo $username ?>" required />
            <label class="labelInput" for="username">Nome de Usuário</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required />
            <label class="labelInput" for="senha">Senha</label>
          </div>
          <br /><br />
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input class="inputSubmit" type="submit" name="update" />
        </fieldset>
      </form>
    </div>
  </body>
</html>
