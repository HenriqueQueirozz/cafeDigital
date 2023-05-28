var btnEnviar = document.getElementById("main-enviarCadastro");
var btnContinuar = document.getElementById("main-continuarCadastro");
var btnFinalizar = document.getElementById("main-finalizarCadastro");
var container1 = document.getElementById("cadastro_part1");
var container2 = document.getElementById("cadastro_part2");
var container3 = document.getElementById("cadastro_part3");

var inputCPE = document.getElementById("id-input-Cpe");
var inputLog = document.getElementById("id-input-Log");

var switchFlat = document.getElementById("switch-flat");
var divId = document.getElementById("div-id");
var divEmail = document.getElementById("div-email");
var switchLabel = document.querySelector(".switch_text");

function Enviar(){
    container1.classList.add("inactive"); 
    container2.classList.remove("inactive"); container2.classList.add("active");
}

function Continuar(){
    container2.classList.remove("active"); container2.classList.add("inactive");
    container3.classList.remove("inactive"); container3.classList.add("active");
}

function Finalizar(){
    window.location.href = "../../manutencao";
}

if(inputCPE){
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
}

if(switchFlat){
    switchFlat.addEventListener("change", function() {
        if (switchFlat.checked) {
        divId.style.display = "none";
        divEmail.style.display = "block";
        } else {
        divId.style.display = "block";
        divEmail.style.display = "none";
        }
    });

    switchFlat.addEventListener("change", function() {
        if (switchFlat.checked) {
        // Se o switch estiver marcado, altera o texto da label para "Entrar com o E-mail?"
        switchLabel.textContent = "Entrar com o ID?";
        } else {
        // Se o switch não estiver marcado, altera o texto da label para "Entrar com o ID?"
        switchLabel.textContent = "Entrar com o E-mail?";
        }
    });
}
