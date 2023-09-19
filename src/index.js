const nombre = document.getElementById("nombre");
const email = document.getElementById("email");
const form = document.getElementById("form");
const text = document.getElementById("warnings");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    let warnings = "";
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    let entrar = false;
    text.innerHTML = "";
    
    if (nombre.value.length < 6) {
        warnings += `El nombre ingresado no es válido, por favor ingrese su nombre y apellido. <br>`;
        entrar = true;
    }

    if (!regexEmail.test(email.value)) {
        warnings += `El email es inválido <br>`;
        entrar = true;
    }

    if (entrar) {
        text.innerHTML = warnings;
        text.style.backgroundColor = "#f34b4b";
         
    } else {
        text.innerHTML = "Muchas gracias por enviar su mensaje <br>";
        text.style.backgroundColor = "#80ed99";
         
    }
});
