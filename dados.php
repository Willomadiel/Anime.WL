<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cadastro"; 
  
    $conn = new mysqli($servername, $username, $password, $dbname);

      if($conn->error){
        die('Erro ao conectar ao banco de dados:'. $conn->error);
      };

    $nome = $_POST["nome"];
    $gmail = $_POST["gmail"];
    $senha = $_POST["senha"];
    $data = $_POST["data"];

    $sql = "INSERT INTO usuarios (nome, gmail, senha, Nascimento) VALUES ('$nome', '$gmail', '$senha', '$data')";   
    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {
        echo "Dados inseridos com sucesso!";
        header("Location: conta.html");
        $valor = "nome"; // Valor da variável que você deseja enviar
        $url = "pagina.js?variavel=" . urlencode($valor);
        exit;
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conn);
        header("Location: cadastro.html");
        exit;
    }
  mysqli_close($conn);
?>
<a href="<?php echo $url; ?>"></a>;

