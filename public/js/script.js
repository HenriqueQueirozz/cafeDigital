/*
|--------------------------------------------------------------------------
|   Máscaras de formulários
|--------------------------------------------------------------------------
*/
$("#id-input-Cpf").mask("000.000.000-00");
$("#id-input-Rg").mask("00.000.000-0");
$("#id-input-Tel").mask("(00) 0000-0000");
$("#id-input-Cel").mask("(00) 00000-0000");
$("#id-input-Data").mask("00/00/0000");
$("#id-input-Cpe").mask("00000-000");

// Preenchimento automático
var inputCPE = document.getElementById("id-input-Cpe");
var inputLog = document.getElementById("id-input-Log");
var inputBairro = document.getElementById("id-input-Bairro");
var inputIbge = document.getElementById("id-input-Ibge");
var inputCidade = document.getElementById("id-input-Cidade");

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
                        inputBairro.value = data.bairro;
                        inputCidade.value = data.localidade+"-"+data.uf;
                        inputIbge.value = data.ibge;
                    }
                } else {
                    // Houve um problema com o pedido.;
                }
            }
        };
        request.send();
    });
}

/*
|--------------------------------------------------------------------------
|   Modais e popUps
|--------------------------------------------------------------------------
*/
// Criando o elemento para efeito de Fade
const divFade = document.createElement('div');
divFade.id = 'fade';

// Adicionando o elemento a página
const divMain = document.getElementById("main");
document.body.insertBefore(divFade, divMain);

// Declarando a variável do elemento 
var fade = document.getElementById('fade');

function abrirDialog(dialog_id){    
    var dialog = document.getElementById(dialog_id);
    dialog.setAttribute("open", "");
    fade.style.display = "block";
}

function fecharDialog(dialog_id){
    var dialog = document.getElementById(dialog_id);
    dialog.removeAttribute("open");
    fade.style.display = "none";
}


/*
|--------------------------------------------------------------------------
|   App blade - Nav Menu - All Pages
|--------------------------------------------------------------------------
*/

function MudarEstado(div) {
    console.log("Olá!");
    var display = document.getElementById(div).style.display;

    if(display == "none")
        document.getElementById(div).style.display = 'block';
    else
        document.getElementById(div).style.display = 'none';
}

// Criando o elemento para notificação
const btn = document.getElementById("enviar");
const divMessage = document.querySelector(".alert");

const msg = "teste de alerta !!!";

function ativar(msg) {
  const message = document.createElement("div");
  message.classList.add("message");
  message.innerText = msg;
  divMessage.appendChild(message);

  setTimeout(() => {
    message.style.display = "none";
  }, 3000);
}

btn.addEventListener("click", () => {
  ativar(msg);
});

// Animação para ocultar o menu
function MudarEstado(div) {
    console.log("Olá!");
    var display = document.getElementById(div).style.display;

    if(display == "none")
        document.getElementById(div).style.display = 'block';
    else
        document.getElementById(div).style.display = 'none';
}