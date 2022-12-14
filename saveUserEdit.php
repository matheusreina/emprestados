<?php
  include_once("config.php");
  if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE itens SET email = '$email', username = '$username', senha = '$senha' 
    WHERE id='$id' ";

    $result = $conexao->query($sqlUpdate);
  }
  header("Location: sistema.php");
?>