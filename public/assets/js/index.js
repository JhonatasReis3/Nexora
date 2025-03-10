
function VerficarSenha() {
    const senhaInput = document.querySelector("#senha")
    senhaInput.addEventListener("input", function () {
        const senha = this.value;
    })
}
function requisitos() {
    const requisitos = document.getElementsByClassName("requisitos")
    for (var i = 0; i < requisitos.length; i++) {
        if (requisitos[i].classList.contains("hidden")) {
            requisitos[i].classList.remove("hidden");
        }
        else {
            requisitos[i].classList.add("hidden");
        }
    }
}

function revelarSenha() {
    var icones = document.getElementsByClassName("icone");
    for (var i = 0; i < icones.length; i++) {
        if (icones[i].classList.contains("hidden")) {
            icones[i].classList.remove("hidden");
            document.getElementById("senha").type = "password";
            document.getElementById("Confirmsenha").type = "password";
        } else {
            icones[i].classList.add("hidden");
            document.getElementById("senha").type = "text";
            document.getElementById("Confirmsenha").type = "text";
        }
    }
}

const verificarsenha = VerficarSenha
document.addEventListener("DOMContentLoaded", verificarsenha);

