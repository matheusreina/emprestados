<?php
  include_once("config.php");
  if(isset($_POST['update'])) {
    $id_item = $_POST['id_item'];
    $item = $_POST['item'];
    $contato = $_POST['contato'];
    $devolucao = $_POST['devolucao'];

    $sqlUpdate = "UPDATE itens SET item = '$item', contato = '$contato', devolucao = '$devolucao' 
    WHERE id_item='$id_item' ";

    $result = $conexao->query($sqlUpdate);
  }
  header("Location: sistema.php");
?>