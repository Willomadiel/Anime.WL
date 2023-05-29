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
var lista = []
function procuras(){
    var procura = document.getElementById('procura')
    var valor = procura.value
    if (valor == "" || isNaN(valor) == false){
        window.location.href='Erro.html'
        return;
    }
    window.location.href='alfabeto/all.html'
} 
var procurase = document.getElementById('procurase')
procurase.addEventListener('click', procuras)
function procurando(){
    if (canalha.style.display == 'block'){
        canalha.style.display = 'none'
    }else{
        canalha.style.display = 'block'
    }
}
var procura = document.getElementById('procura')
procura.addEventListener('click', procurando)

function buscar(){
    var canalha = document.getElementById('canalha')
    if (canalha.style.display == 'block'){
        canalha.style.display = 'none'
    }else{
        canalha.style.display = 'block'
    }
}
var cana = document.getElementsByClassName('li')
cana.addEventListener('click', buscar)