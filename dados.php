<?php
  $nome = $_POST["nome"];
  $gmail = $_POST["gmail"];
  $senha = $_POST["senha"];
  $data = $_POST["data"];
  $genero = $_POST["genero"];

  $valorAleatorio = random_int(1000, 10000);

  require 'vendor/autoload.php';

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;

  // Configurações do servidor SMTP do Gmail
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Remova esta linha para desativar a depuração
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls'; // ou 'ssl' se preferir usar SSL
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587; // ou 465 para SSL
  $mail->Username = 'animeswillo@gmail.com'; // Seu endereço de e-mail do Gmail
  $mail->Password = 'csfnrjftzaijtifc'; // Sua senha do Gmail

  // Configurações do e-mail
  $mail->setFrom('animeswillo@gmail.com', 'Animes Willo'); // Remetente
  $mail->addAddress($gmail, $nome); // Destinatário
  $mail->Subject = 'Codigo de Autenticação';
  $mail->Body = 'Seja-Bem Vindo!!'. $nome . 'Espero que você supere seus limits, my brother.'.  'Aqui está Seu Codigo de autenticação:'. $valorAleatorio;
  $mail->send();

  $servername = "localhost";
  $username = "Willomadiel";
  $password = "paulo2019";
  $dbname = "cadastro"; 
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT nome, gmail FROM usuarios";
  $result = $conn->query($sql);
    if($conn->error){
      die('Erro ao conectar ao banco de dados:'. $conn->error);
      exit;
    }else{
      if ($result->num_rows > -1) {
        while($row = $result->fetch_assoc()) {
          echo "gmail: " . $row["gmail"]. " - Nome: " . $row["nome"]. "<br>";
          if ($row["gmail"] == $gmail || $row["nome"] == $nome) {
            header("Location: cadastro.html");
            echo 'Ja tem alguem usando esse nome de usuario ou esse gmail.';
            die();
          }
        }
          $sql = "INSERT INTO usuarios (nome, gmail, senha, Nascimento, autentic, genero) VALUES ('$nome', '$gmail', '$senha', '$data', '$valorAleatorio', '$genero')";   
          $resultado = $conn->query($sql);
            header("Location: conta.html");
            exit;
          } else {
            echo "Erro ao inserir dados: " . mysqli_error($conn);
            header("Location: cadastro.html");
            exit;
          }
        }
?>