<?php
  session_start();
  $user = $_POST["nome"];
  $senha = $_POST["senha"];
  $codigo = $_POST["autentic"];
  $conta = 0;

  $servername = "localhost";
  $username = "Willomadiel";
  $password = "paulo2019";
  $dbname = "cadastro"; 
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT nome, senha, autentic, genero, Nascimento FROM usuarios";
  $result = $conn->query($sql); 
    if($conn->error){
      header("Location: conta.html");
      exit;
    }else{
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if ($row["senha"] == $senha && $row["nome"] == $user  && $row["autentic"] == $codigo ) {
            $usuario = $row["nome"];
            $femimascu = $row["genero"];
            $idade = $row["Nascimento"];
            $sql = "SELECT nome, senha, autentic FROM Cadastrados";
            $result = $conn->query($sql); 
            if ($result->num_rows > -1) {
              while($row = $result->fetch_assoc()) {
                if ($row["senha"] == $senha && $row["nome"] == $user && $row["autentic"] == $codigo){
                  header("Location: perfil.php?user=");
                  $_SESSION['nome'] = $usuario;
                  $_SESSION['idade'] = $idade;
                  $_SESSION['genero'] = $femimascu;
                  $conta =+ 1;
                  exit;
                }
                if ($conta === 0){
                    $sql = "INSERT INTO Cadastrados (nome, senha, autentic) VALUES ('$user', '$senha', '$codigo')";   
                    $resultado = $conn->query($sql);
                    header("Location: perfil.php?user=" . urlencode($user) . "&senha=" . $senha);
                    $_SESSION['nome'] = $usuario;
                    $_SESSION['idade'] = $idade;
                    $_SESSION['genero'] = $femimascu;
                    exit;
                  } 
              } 
            }else{
              $sql = "INSERT INTO Cadastrados (nome, senha, autentic) VALUES ('$user', '$senha', '$codigo')";   
              $resultado = $conn->query($sql);
              header("Location: perfil.php?user=" . urlencode($user) . "&senha=" . $senha);
              $_SESSION['nome'] = $usuario;
              $_SESSION['idade'] = $idade;
              $_SESSION['genero'] = $femimascu;
              exit;
            }
          }else{
            header("Location: conta.html");
            die();
          }
        }
      }
    }
?>