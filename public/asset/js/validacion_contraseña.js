document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registroForm");

  form.addEventListener("submit", function (e) {
    const pass = form.querySelector('input[name="contrasena"]').value;
    const confirm = form.querySelector('input[name="confirmar_contrasena"]').value;

    if (pass !== confirm) {
      e.preventDefault();
      alert("Las contraseñas no coinciden.");
    }
  });
});