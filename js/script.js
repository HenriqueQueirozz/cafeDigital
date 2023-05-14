console.log("Olá!");

var BtnContinuar = document.getElementById("main-enviarCadastro-1");
var Cadastro1 = document.getElementsByClassName("main-second-content");

BtnContinuar.addEventListener("click", function(){
    Cadastro1.classList.add("inactive");
    alert('Oi');
})