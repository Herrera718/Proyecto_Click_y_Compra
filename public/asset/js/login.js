document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const correo = document.getElementById('correo').value;
    const contrasena = document.getElementById('contrasena').value;
    const errorDiv = document.getElementById('loginError');

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/login-check', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'X-CSRF-TOKEN': csrfToken
        },
        body: `correo=${encodeURIComponent(correo)}&contrasena=${encodeURIComponent(contrasena)}`
    })
        .then(response => response.text())
        .then(texto => {
            if (texto.includes("Inicio de sesión")) {
                window.location.href = '/dashboard'; // a donde quiera dirigirse
            } else {
                errorDiv.textContent = texto;
                errorDiv.classList.remove('d-none');
            }
        })
        .catch(error => {
            errorDiv.textContent = 'Error de conexión con el servidor.';
            errorDiv.classList.remove('d-none');
        });
});