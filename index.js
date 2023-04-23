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
document.getElementById('res').textContent = valor
} 
var procurase = document.getElementById('procurase')
procurase.addEventListener('click', procuras)