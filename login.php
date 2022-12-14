<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Emprestados</title>
    <!-- Font awesome icon -->
    <script src="https://kit.fontawesome.com/0e5488de0a.js" crossorigin="anonymous"></script>
    <!-- CSS local -->
    <link rel="stylesheet" href="css\style.css" />
  </head>
  <body>
    <form method="post" action="testLogin.php">
      <a href="index.html" class="arrowIcon" ><i class="fa-solid fa-chevron-left"></i></a>
      <div class="loginBox">
        <h1>Login</h1>
        <input class="inputLogin" type="text" placeholder="Username" name="username"/>
        <br /><br />
        <input class="inputLogin" type="password" placeholder="Senha" name="senha" />
        <br /><br />
        <input class="inputSubmit" type="submit" name="submit">
     </div>
    </form>
  </body>
</html>
