var btnEnviar = document.getElementById("main-enviarCadastro");
var btnContinuar = document.getElementById("main-continuarCadastro");
var btnFinalizar = document.getElementById("main-finalizarCadastro");
var container1 = document.getElementById("cadastro_part1");
var container2 = document.getElementById("cadastro_part2");
var container3 = document.getElementById("cadastro_part3");

function Enviar(){
    container1.classList.add("inactive"); 
    container2.classList.remove("inactive"); container2.classList.add("active");
    console.log(container1);
}

function Continuar(){
    container2.classList.remove("active"); container2.classList.add("inactive");
    container3.classList.remove("inactive"); container3.classList.add("active");
    console.log(container1);
}

function Finalizar(){
    window.location.href = "../manutencao.html";
}