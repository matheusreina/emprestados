<?php

  if(!empty($_GET['id_item'])) {
    include_once("config.php");

    $id_item = $_GET['id_item'];

    $sqlSelect = "SELECT * FROM itens WHERE id_item='$id_item'";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0) {
      while($user_data = mysqli_fetch_assoc($result)){
        $item = $user_data['item'];
        $contato = $user_data['contato'];
        $devolucao = $user_data['devolucao'];
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
      <form action="saveItemEdit.php" method="POST">
        <fieldset>
          <legend><b>Cadastro de Coisas</b></legend>
          <br />
          <div class="inputBox">
            <input type="text" name="item" id="item" class="inputUser" value="<?php echo $item ?>" required />
            <label class="labelInput" for="item">Item</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input type="text" name="contato" id="contato" class="inputUser" value="<?php echo $contato ?>" required />
            <label class="labelInput" for="contato">Contato</label>
          </div>
          <br /><br />
          <label class="labelData" for="dataDevolucao"><b>Data de devolução</b></label>
          <br />
          <br />
          <input type="date" name="devolucao" class="devolucao" value="<?php echo $devolucao ?>" required />
          <br /><br />
          <input type="hidden" name="id_item" value="<?php echo $id_item ?>">
          <input class="inputSubmit" type="submit" name="update" />
        </fieldset>
      </form>
    </div>
  </body>
</html>
