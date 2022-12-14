<?php

  $dbhost = 'localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'emprestado';

  $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

  // if($conexao->connect_errno) {
  //   echo "Erro";
  // } else {
  //   echo "Conexao efetuada com sucesso";
  // }

?>