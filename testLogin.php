<?php
  session_start();
  if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['senha'])) {
    // Acessa
    include_once('config.php');

    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1) {
      unset($_SESSION['username']);
      unset($_SESSION['senha']);
      header("Location: login.php");
    } else {
      $_SESSION['username'] = $username;
      $_SESSION['senha'] = $senha;
      header("Location: sistema.php");
    }

  } else {
    // Não Acessa
    header("Location: login.php");
  }

?>