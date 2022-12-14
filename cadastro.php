<?php

  if(isset($_POST['submit'])) {
    include_once("config.php");

    $item = $_POST['item'];
    $contato = $_POST['contato'];
    $devolucao = $_POST['devolucao'];

    $result = mysqli_query($conexao, "INSERT INTO itens(item,contato,devolucao) 
    VALUES ('$item','$contato','$devolucao')");
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
      <form action="cadastro.php" method="POST">
        <fieldset>
          <legend><b>Cadastro de Coisas</b></legend>
          <br />
          <div class="inputBox">
            <input type="text" name="item" id="item" class="inputUser" required />
            <label class="labelInput" for="item">Item</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input type="text" name="contato" id="contato" class="inputUser" required />
            <label class="labelInput" for="contato">Contato</label>
          </div>
          <br /><br />
          <label class="labelData" for="dataDevolucao"><b>Data de devolução</b></label>
          <br />
          <br />
          <input type="date" name="devolucao" class="devolucao" required />
          <br /><br />
          <input class="inputSubmit" type="submit" name="submit" />
        </fieldset>
      </form>
    </div>
  </body>
</html>
