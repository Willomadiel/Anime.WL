<?php
$user = $_GET['user'];
$senha = $_GET['senha'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Icons/icons8-w-key-16.png" type="image/x-icon">
    <title>Anime.WL</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/cellstyle.css">
    <link rel="stylesheet" href="Style/cell2style.css">
    <link rel="stylesheet" href="Style/scroll.css">
    <style>
        body{
            background-color: rgb(44, 43, 43);
            margin: 0px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        fieldset{
            display: block;
            text-align: justify;
            font-size: 30px;
            color: aliceblue;
            display: inline-block;
            background-color: rgb(75, 75, 75);
            border-color: rgb(233, 58, 58);
            margin-bottom: 2px;
            font-size: 17px;
        }
        fieldset > legend{
            font-size: 30px;
            text-align: center;
            color: rgb(247, 247, 247)
        }
        fieldset #j1{
            margin-left: 35px;
            background-color: rgb(43, 146, 230);
            font-size: 20px;
            margin-top: 50px;
        }
        .s1{
            height: 45px;
            width: 250px;
            background-color: rgb(42, 43, 43);
        }
        #date{
            font-size: 18px;
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px;
            padding: 0px;
        }
        #cr{
            border: rgb(116, 3, 3);
            border-width: 1px;
            border-style: solid;
            text-align: start;
            background-color: rgb(212, 32, 47);
            position: relative;
            color: rgb(0, 0, 0);
        }
        #cr:hover{
            color: rgb(224, 221, 221);
            display: none;
        }
        .f3{
            text-decoration: none;
            padding-top: 10px;
            padding-left: 10px;
            margin-top: 1px;
        }
        .l1{
            font-size: 18px;
            padding-left: 160px;
            margin-top: 30px;
            display: block;
        }
        h2{
            width: 100%;
            height: 110px;
            background-color: #0E0E0E;
            text-align: center;
            margin: 0px;
        }
        h2 > p{ 
            margin: 0px;
            margin-left: 30px;
            color: rgb(212, 32, 47);
        }
        h2 img{
            margin-left: 40px;
            width: 30px;
            border-radius: 50%;
            margin-top: 10px;
        }
        h2{
            background-image: url('Temporadas/Icons/955301.jpg');
            background-position: center top; 
            background-size: 40%;
        }
        h2 img:hover{
            transform: translate(-3px, -3px);
        }
        #file{
            text-decoration: none;
            font-size: 20px;
            margin: 0px;
        }
        #h4{
            font-size: 17px;
            padding-top: 10px;
            margin: 0px;
            margin-top: 10px;
        }
        #k6{
            font-size: 20px;
            margin-top: 40px;
            display: block;
            padding-left: 50px;
            color: rgb(0, 15, 228);
        }
        header{
            width: 100%;
            display: inline-block;
            text-align: start;
        }
        #arquivo{
            width: 130px;
        }
        #frame{
            width: 142px;
            height: 146px;
        }
        #sob{
            margin: 0px;
        }
        header li{
            padding: 4px;
            list-style-type: none;
        }
        #sob2{
            display: inline-block;
            background-color: rgb(92, 158, 233);
            text-align: center;
            color: black;
            background-color: rgb(44, 42, 42);
            width: 100%;
        }
        .li{
            display: inline-block;
            border-bottom: 2px rgb(207, 53, 53) solid ;
            padding-left: px;
            margin: 0px;
        }
        div p{
            background-color: #0E0E0E;
            margin: 0px;
            padding: 0px;
            color: rgb(80, 90, 231);
        }
        #sob{
            margin: 0px;
            width: 100px;
        }
        #j7{
            text-decoration: none;
            color: rgb(212, 32, 47);
            font-size: 30px;
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
        <div id="mx" href="index.html" style="color: rgb(212, 32, 47);
        display: inline-block;">Animes <img id="perfil" src="Imagens/perfil.png"  onclick="login()" alt=""> Willo</div>
        <div id="mg">
            <form method="get" action="alfabeto/All.html" id="searchform">

                <input class="k9" type="search" maxlength="20" placeholder="Procurar Anime" name="procura" id="procura" autocomplete="off" ><input type="button" id="procurase" value="🔎">

            </form>
        </div></h1>
        <div id="res"></div>
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
        "><li><a href="alfabeto/All.html">#</a></li> 
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
        <li><a href="alfabeto/Letra-K.html">K</a></li>
        <li><a href="alfabeto/Letra-L.html">L</a></li>
        <li><a href="alfabeto/Letra-N.html">N</a></li>
        <li><a href="alfabeto/Letra-M.html">M</a></li>
        <li><a href="alfabeto/Letra-O.html">O</a></li>
        <li><a href="alfabeto/Letra-P.html">P</a></li>
        <li><a href="alfabeto/Letra-Q.html">Q</a></li>
        <li><a href="alfabeto/Letra-R.html">R</a></li>
        <li><a href="alfabeto/Letra-R.html">S</a></li>
        <li><a href="alfabeto/Letra-T.html">T</a></li>
        <li><a href="alfabeto/Letra-U.html">U</a></li>
        <li><a href="alfabeto/Letra-V.html">V</a></li>
        <li><a href="alfabeto/Letra-W.html">W</a></li>
        <li><a href="alfabeto/Letra-X.html">X</a></li>
        <li><a href="alfabeto/Letra-Y.html">Y</a></li>
        <li><a href="alfabeto/Letra-Z.html">Z</a></li>
        <li><a href="alfabeto/All.html">#</a></li>
    </div>
    <form action="Cadastro.py" method="post">
        <fieldset id="f1">
            <legend>Seu Perfil</legend>
            <header style="background-color: rgb(20, 20, 20)"> <img id="frame" src="Imagens/perfil.png" frameborder="0"></img><main id="sob" style="display: inline-block;">
                <li style="color: red;">ADM</li> 
                <li style="color: rgb(68, 245, 24);">Brasileiro</li> 
                <li style="color: blue;">OTaku</li>
                <li style="color: yellow;">Competidor</li>
                <li style="color: darkorange;">Tecnico Manutenção</li></main>
                <div id="sob2"><p>Medalhas</p><br>
                <li class="li">🥇</li> 
                <li class="li">🥈</li> 
                <li class="li">🥉</li>
                <li class="li">🏅</li>
                <li class="li">🎖</li>
                <li class="li">🏆</li>
                <li class="li">🏆</li><br>
                <li class="li">🥇</li> 
                <li class="li">🥈</li> 
                <li class="li">🥉</li>
                <li class="li">🏅</li>
                <li class="li">🎖</li>
                <li class="li">🏆</li>
                <li class="li">🏆</li><br>
                <li class="li">🥇</li> 
                <li class="li">🥈</li> 
                <li class="li">🥉</li>
                <li class="li">🏅</li>
                <li class="li">🎖</li>
                <li class="li">🏆</li>
                <li class="li">🏆</li>
            </div></header>
            <p id="joao">Usuario: <?php echo $user ?> </p>
            <p id="pedro">Idade: <?php echo $senha ?></p>
            <p>Nova Foto Perfil: <br><input type="file" name="file" id="arquivo"></p>
        </fieldset>
    </form>
    <h2>
        <p>Criador: Willomadiel</p>
        <a href="https://www.facebook.com/profile.php?id=100054394630823" target="_blank"><img src="Imagens/icons8-facebook-64.png" alt=""></a>
        <a href="https://www.instagram.com/willomadiel/" target="_blank"><img src="Imagens/icons8-instagram-64.png" alt=""></a>
        <a href="https://twitter.com/willomadiel" target="_blank"><img src="Imagens/icons8-twitter-64.png" alt=""></a>
    </h2>
<script>
function login(){
    if (log.style.display == 'block' || itens.style.display == 'block') {
        itens.style.display = 'none'
        log.style.display = 'none'
    } else {
        log.style.display = 'block'
    }
}
function clickMenu(){
    if (itens.style.display == 'block' || log.style.display == 'block') {
        itens.style.display = 'none'
        log.style.display = 'none'
    } else {
        itens.style.display = 'block'
    }

}
var proc = document.getElementById('procura')
function procura(){
    proc.localName()
} 
let content = document.querySelector('.content');
let inputSearch = document.querySelector("input[type='search']");
    </script>
</body>
</html>