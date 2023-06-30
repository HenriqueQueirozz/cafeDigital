var switchFlat = document.getElementById("switch-flat");
var divId = document.getElementById("div-id");
var input_id = document.getElementById("id-input-Id");
var divEmail = document.getElementById("div-email");
var input_email = document.getElementById("id-input-Email");
var switchLabel = document.querySelector(".switch_text");

if(switchFlat){
    switchFlat.addEventListener("change", function() {
        if (switchFlat.checked) {
            // Se o switch estiver marcado, altera o texto da label para "Entrar com o E-mail?"
            switchLabel.textContent = "Entrar com o ID?";
            divId.style.display = "none";
            input_id.value = '';
            divEmail.style.display = "block";
        } else {
            // Se o switch não estiver marcado, altera o texto da label para "Entrar com o ID?"
            switchLabel.textContent = "Entrar com o E-mail?";
            divId.style.display = "block";
            input_email.value = '';
            divEmail.style.display = "none";
        }
    });
}