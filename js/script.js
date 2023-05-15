var btnEnviar = document.getElementById("main-enviarCadastro");
var btnContinuar = document.getElementById("main-continuarCadastro");
var btnFinalizar = document.getElementById("main-finalizarCadastro");
var container1 = document.getElementById("cadastro_part1");
var container2 = document.getElementById("cadastro_part2");
var container3 = document.getElementById("cadastro_part3");

var inputCPE = document.getElementById("id-input-Cpe");
var inputLog = document.getElementById("id-input-Log");

function Enviar(){
    container1.classList.add("inactive"); 
    container2.classList.remove("inactive"); container2.classList.add("active");
}

function Continuar(){
    container2.classList.remove("active"); container2.classList.add("inactive");
    container3.classList.remove("inactive"); container3.classList.add("active");
}

function Finalizar(){
    window.location.href = "../manutencao.html";
}

inputCPE.addEventListener('blur', function(){
    var CPE = inputCPE.value.replace(/\D/g, '');

    if (window.XMLHttpRequest) {            // Mozilla, Safari, ...
        request = new XMLHttpRequest();
    } else if (window.ActiveXObject) {      // IE
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (exception) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (exception) {}
        }
    }

    if (!request) {
        // Não é possível criar uma instância XMLHTTP.;
        return false;
    }

    request.open("GET", "https://viacep.com.br/ws/"+CPE+"/json/");
    request.onreadystatechange = function(){
        if (request.readyState === 4) {
            if (request.status >= 200 && request.status < 400) {
                var data = JSON.parse(request.responseText);
                if(!data.erro){
                    inputLog.value = data.logradouro;
                }
            } else {
                // Houve um problema com o pedido.;
            }
        }
    };
    request.send();
});

