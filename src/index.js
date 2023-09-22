document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const nombre = document.getElementById("nombre");
    const email = document.getElementById("email");
    const warnings = document.getElementById("warnings"); // Agregar referencia al elemento span

    form.addEventListener("submit", function (event) {
        let errors = [];

        warnings.innerHTML = ""; // Limpiar cualquier contenido previo en el elemento span

        if (nombre.value.trim().length < 6) {
            errors.push("El nombre ingresado no es válido, por favor ingrese su nombre y apellido.");
        }

        const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        if (!emailPattern.test(email.value)) {
            errors.push("Por favor, ingrese un correo electrónico válido.");
        }

        if (errors.length > 0) {
            event.preventDefault();
            warnings.innerHTML = errors.join("<br>");
            warnings.style.backgroundColor = "#f34b4b";
        }
    });
});
