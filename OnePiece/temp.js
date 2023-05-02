
        function clickMenu(){
            if (temp1.style.display == 'block' ){
                temp1.style.display = 'none'
            } else {
                temp1.style.display = 'block'
            }
        }
        function clickMenu2(){
            if (temp2.style.display == 'block' ){
                temp2.style.display = 'none'
            } else {
                temp2.style.display = 'block'
            }
        }
        function clickMenu3(){
            if (temp3.style.display == 'block' ){
                temp3.style.display = 'none'
            } else {
                temp3.style.display = 'block'
            }
        }
        function clickMenu4(){
            if (temp4.style.display == 'block' ){
                temp4.style.display = 'none'
            } else {
                temp4.style.display = 'block'
            }
        }
        function clickMenu5(){
            if (temp5.style.display == 'block' ){
                temp5.style.display = 'none'
            } else {
                temp5.style.display = 'block'
            }
        }
        function clickMenu6(){
            if (temp6.style.display == 'block' ){
                temp6.style.display = 'none'
            } else {
                temp6.style.display = 'block'
            }
        }
        function login(){
    if (log.style.display == 'block' || itens.style.display == 'block') {
        itens.style.display = 'none'
        log.style.display = 'none'
    } else {
        log.style.display = 'block'
    }
}
function clickMen(){
    if (itens.style.display == 'block' || log.style.display == 'block') {
        itens.style.display = 'none'
        log.style.display = 'none'
    } else {
        itens.style.display = 'block'
    }
}
function procurando(){
    if (canalha.style.display == 'block'){
        canalha.style.display = 'none'
    }else{
        canalha.style.display = 'block'
    }
}
var procura = document.getElementById('procura')
procura.addEventListener('click', procurando)

var lista = []
function procuras(){
    var procura = document.getElementById('procura')
    var valor = procura.value
    if (valor == "" || isNaN(valor) == false){
        window.location.href='../Erro.html'
        return;
    }
document.getElementById('res').textContent = valor
} 
var procurase = document.getElementById('procurase')
procurase.addEventListener('click', procuras)