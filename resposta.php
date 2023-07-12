
<?php 
$anime = $_GET["proc"];

$servername = "localhost";
$username = "Willomadiel";
$password = "paulo2019";
$dbname = "cadastro"; 
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT names FROM listanimes Where = $anime";
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Icons/icons8-w-key-16.png" type="image/x-icon">
    <title>Buscando: </title>
    <link rel="stylesheet" href="alfabeto/style.css">
    <link rel="stylesheet" href="alfabeto/perfi.css">
    <link rel="stylesheet" href="alfabeto/maior.css">
    <link rel="stylesheet" href="alfabeto/scroll.css">
    <style> 
    body{ background-color: #212121;
        color: rgb(0, 0, 0);
    }
    #principal{
        background: #0E0E0E;
        margin: auto;
        padding: 20px;
        margin-top: 1px;
    }
    #conteudo{
        width: 160px;
        height: 220px;
        background-color: aliceblue;
        margin: 0px;
        display: inline-block;
        
    }
    #fora{
        width: 160px;
        margin: 0px;
        padding: 10px;
        color: aliceblue;
        text-align: center;
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
    }
    div > p{
        margin: 0px;
    
    }
    #topo1{
        color: aliceblue;
        background-color: #212121;
        height: 30px;
        font-size: 28px;
        font-family: Arial, Helvetica, sans-serif;
        border-left: red solid 6px;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    h2{
        background-image: url('Icons/126438\ \(1\).png');
        background-position: center;
        background-size: 30%;
        margin-top: 1px;
    }
    h2 img{
        width: 35px;
    }
    .next{
        display: inline-block;
        color: aliceblue;
    }
    #total{
        display: block;
        padding: 15px;
        position: static;
    }
    #tamo{
        border: solid 1px rgb(95, 162, 221);
        padding: 4px;
        font-family: Arial, Helvetica, sans-serif;
    }
    #fora:hover{
        text-decoration: underline;
        color: rgba(250, 235, 33, 0.945);
        cursor: pointer;
    }
    #br{
        text-align: center;
    }
    #cr{
        float: left;
    }
    #br{
        width: 100%;
    }
    #maioria > li > a{
        width: 10px;
    }
    </style>
</head>
<body>
        <h1 id="br" style="line-height: normal 20pt;
        background: #0E0E0E;
        display: inline-block;">
        <div id="cr" style="font-size: 27px;
        display: inline-block;
        text-align: center;
        width: 40px; 
        " onclick="clickMenu()">&#9776;</div>
        <a id="mx" style="color: rgb(212, 32, 47);
        display: inline-block;">Animes <img id="perfil" src="Imagens/perfil.png"  onclick="login()" alt=""> Willo</a>
        <div id="mg">
            <input class="k9" type="search" placeholder="Procurar Anime" name="procura" id="procura"><input type="button" class="k9" onclick="procura()" value="🔎">
            <div class="content"></div>
        </div></h1>
        <menu id="itens">
            <ul>
                <h4>Generos</h4>
                <li><a href="alfabeto/Esporte.html">Esporte</a></li>
                <li><a href="alfabeto/Aventura.html">Aventura</a></li>
                <li><a href="alfabeto/Ação.html">Ação</a></li>
                <li><a href="alfabeto/Luta.html">Luta</a></li>
                <li><a href="alfabeto/Poderes.html">Poderes</a></li>
                <li><a href="alfabeto/Comedia.html">Comedia</a></li>
                <li><a href="alfabeto/Suspense.html">Suspense</a></li>
                <li><a href="alfabeto/Drama.html">Drama</a></li>
                <li><a href="alfabeto/Culinaria.html">Culinaria</a></li>
                <li><a href="alfabeto/Romance.html">Romance</a></li>
                
            </ul>
        </menu>
        <menu id="log">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="Conta.html">Login</a></li>
            <li><a href="perfil.html">Perfil</a></li>
            <li><a href="cadastro.html">Cadastre-se</a></li>
        </menu>
        <div class="f3" href="download.jpg" style=" height: 40px;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #0E0E0E;
        color: rgb(255, 255, 255);
        "><div id="maioria">
            <li><a href="alfabeto/All.html">#</a></li>
            <li><a href="alfabeto/Letra-A.html">A</a></li>
            <li><a href="alfabeto/Letra-B.html">B</a></li>
            <li><a href="alfabeto/Letra-C.html">C</a></li>
            <li><a href="alfabeto/Letra-D.html">D</a></li>
            <li><a href="alfabeto/Letra-E.html">E</a></li>
            <li><a href="alfabeto/Letra-F.html">F</a></li>
            <li><a href="alfabeto/Letra-G.html">G</a></li>
            <li><a href="alfabeto/Letra-H.html">H</a></li>
            <li><a href="alfabeto/Letra-I.html">I</a></li>
            <li><a href="alfabeto/Letra-J.html">J</a></li>
            <li><a href="alfabeto/Letra-L.html">L</a></li>
            <li><a href="alfabeto/Letra-N.html">N</a></li>
            <li><a href="alfabeto/Letra-M.html">M</a></li>
            <li><a href="alfabeto/Letra-O.html">O</a></li>
            <li><a href="alfabeto/Letra-P.html">P</a></li>
            <li><a href="alfabeto/Letra-Q.html">Q</a></li>
            <li><a href="alfabeto/Letra-R.html">R</a></li>
            <li><a href="alfabeto/Letra-S.html">S</a></li>
            <li><a href="alfabeto/Letra-T.html">T</a></li>
            <li><a href="alfabeto/Letra-U.html">U</a></li>
            <li><a href="alfabeto/Letra-V.html">V</a></li>
            <li><a href="alfabeto/Letra-W.html">W</a></li>
            <li><a href="alfabeto/Letra-X.html">X</a></li>
            <li><a href="alfabeto/Letra-Y.html">Y</a></li>
            <li><a href="alfabeto/Letra-Z.html">Z</a></li>
            <li><a href="alfabeto/All.html">#</a></li>
        </div>
    </div>
        <div id="principal">
            <div id="topo1">
                Procurando:  
            </div>
            <p id="nata">Não tem animes disponiveis com essa letra. <br>Estamos trabalhando para melhorar!!
            </p>
                <div id="total">
                    <p class="next" id="tamo">
                        Paginas 1 de 1
                    </p>
                    <div class="next">
                        <input type="button" value="◀">
                    </div>
                    <div id="proximo" class="next">
                        <input type="button" value="1">
                    </div>
                    <div id="proximo" class="next">
                        -
                    </div>
                    <div id="proximo" class="next">
                        <input type="button" value="1">
                    </div>
                    <div class="next">
                        <input type="button" value="▶">
                    </div>
            </div>
        </div>
        <h2>
            <p>Criador: Willomadiel</p>
            <a href="https://www.facebook.com/profile.php?id=100054394630823" target="_blank"><img src="../Imagens/icons8-facebook-64.png" alt=""></a>
            <a href="https://www.instagram.com/willomadiel/" target="_blank"><img src="../Imagens/icons8-instagram-64.png" alt=""></a>
            <a href="https://twitter.com/willomadiel" target="_blank"><img src="../Imagens/icons8-twitter-64.png" alt=""></a>
        </h2>
        <script src="index.js"></script>
    </body>
    </html> 