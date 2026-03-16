var contatoLink = document.getElementById("contato");
contatoLink.addEventListener("click", function(event) {
    event.preventDefault();
    alert("Contato: (55) 9 91498228");
}); 
var enderecoLink = document.getElementById("endereco");
enderecoLink.addEventListener("click", function(event) {
    event.preventDefault();
    alert("Endereço: Rua Siqueira Couto, 188 – Ijuí/RS");
});

function mostrarPix(){
document.getElementById("dadosPix").style.display = "block";
document.getElementById("dadosCartao").style.display = "none";
}

function mostrarCartao(){
document.getElementById("dadosPix").style.display = "none";
document.getElementById("dadosCartao").style.display = "block";
}