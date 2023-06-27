<?php
  $user = $_POST["nome"];
  $senha = $_POST["senha"];
  $codigo = $_POST["autentic"];

  $servername = "localhost";
  $username = "Willomadiel";
  $password = "paulo2019";
  $dbname = "cadastro"; 
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT nome, senha, autentic FROM usuarios";
  $result = $conn->query($sql); 
    if($conn->error){
      header("Location: conta.html");
      exit;
    }else{
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if ($row["senha"] == $senha && $row["nome"] == $user  && $row["autentic"] == $codigo ) {
            $sql = "SELECT nome, senha, autentic FROM Cadastrados";
            $result = $conn->query($sql); 
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                if ($row["senha"] == $senha && $row["nome"] == $user && $row["autentic"] == $codigo){
                  header("Location: perfil.php?user=" . urlencode($user) . "&senha=" . $senha);
                  $conta = 0;
                  $conta =+ 1;
                  exit;
                }
                if ($conta === 0){
                    $sql = "INSERT INTO Cadastrados (nome, senha, autentic) VALUES ('$user', '$senha', '$codigo')";   
                    $resultado = $conn->query($sql);
                    header("Location: perfil.php?user=" . urlencode($user) . "&senha=" . $senha);
                    exit;
                  } 
              } 
            }else{
              $sql = "INSERT INTO Cadastrados (nome, senha, autentic) VALUES ('$user', '$senha', '$codigo')";   
              $resultado = $conn->query($sql);
              header("Location: perfil.php?user=" . urlencode($user) . "&senha=" . $senha);
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