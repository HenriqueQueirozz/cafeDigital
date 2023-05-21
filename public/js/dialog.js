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