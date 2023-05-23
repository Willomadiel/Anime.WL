<?php
  $senha = 'root';
  $usuario = 'root';  
  $host = 'localhost';   
  $database = 'cadastro';    

  $mysqli = new mysqli($host, $usuario, $senha, $database);
    if($mysqli->error){
      die('Erro ao conectar ao banco de dados:'. $mysqli->error);
    }
?>