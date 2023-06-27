<?php 
$anime = $_GET["proc"];

$servername = "localhost";
$username = "Willomadiel";
$password = "paulo2019";
$dbname = "cadastro"; 
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT names FROM listanimes Where = '$anime'";
$result = $conn->query($sql);
    if($conn->error){
        header("Location: index.html");
        exit;
    }else{
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo $row["names"];
                exit;
            }
        }
    }
?>