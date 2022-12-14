<?php

  if(!empty($_GET['id_item'])) {
    include_once("config.php");

    $id_item = $_GET['id_item'];

    $sqlSelect = "SELECT * FROM itens WHERE id_item='$id_item'";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0) {

      $sqlDelete = "DELETE FROM itens WHERE id_item = '$id_item'";
      $resultDelete = $conexao->query($sqlDelete);

    }
      header("Location: sistema.php");
  }

?>