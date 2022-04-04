<?php

  $dbHost = 'LocalHost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'controle-de-estoque-pi';

  $conexão = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  if($conexao->connect_errno)

  {
      echo "Erro";
  }
  
  else

  {
      echo "Conexao efetuada com sucesso";
  }

?>