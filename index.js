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
function procuras(){
    const procura = document.getElementById('procura')
    const valor = procura.value
    if (valor == "" || isNaN(valor) == false){
        window.location.href='Erro.html'
        lista = valor
        return;
    }
    window.location.href='resposta.html'
} 
var procurase = document.getElementById('procurase')
procurase.addEventListener('click', procuras);

var urlParams = new URLSearchParams(window.location.search);
var valor = urlParams.get('variavel');

console.log(valor);



  