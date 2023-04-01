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