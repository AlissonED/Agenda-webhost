function mostrarSenha() {
    var x = document.getElementById("s");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function enviar(event) {
    if (event.keyCode === 13) { 
        document.getElementById("bt1").click();
        return false;
    }
}