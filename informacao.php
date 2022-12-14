<?php
  session_start();
  include_once("config.php");
  if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['senha']);
    header("Location: login.php");
  }
  $logado = $_SESSION['username'];

  $sql = "SELECT * FROM users WHERE username = '$logado' ORDER BY id";

  $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema | Emprestados</title>
    <!-- CSS (Bootstrap) only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS Local -->
    <link rel="stylesheet" href="css\style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a href="sistema.php" class="navbar-brand">EMPRESTADOS</a>
        </button>
      </div>
      <div class="d-flex">
        <a href="sistema.php" class="btn btn-light me-5">Voltar</a>
      </div>
      <div class="d-flex">
        <a href="logout.php" class="btn btn-danger me-5">Logout</a>
      </div>
    </nav>
    <br><br>
    <?php echo "<h1>Editar informações de ".$logado."</h1>" ?>
    <div class="m-5">
      <table class="table text-white table-bg">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Senha</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($user_data = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>".$user_data['id']."</td>";
              echo "<td>".$user_data['email']."</td>";
              echo "<td>".$user_data['username']."</td>";
              echo "<td>".$user_data['senha']."</td>";
              echo "<td>
                      <a class='btn btn-sm btn-primary' href='editUser.php?id=$user_data[id]'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                      </svg>
                      </a>
                    </td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
