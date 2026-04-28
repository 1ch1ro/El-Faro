document.addEventListener('DOMContentLoaded', function () {

    const elFecha = document.getElementById('fecha-actual');
    const elReloj = document.getElementById('reloj-vivo');

    if (elFecha && elReloj) {
        function tick() {
            const ahora = new Date();
            const opciones = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
            elFecha.textContent = ahora.toLocaleDateString('es-ES', opciones);
            elReloj.textContent = ahora.toLocaleTimeString('es-ES');
        }
        setInterval(tick, 1000);
        tick();
    }

    const formRegistro = document.querySelector('form[action*="registro"]');
    if (formRegistro) {
        formRegistro.addEventListener('submit', function (e) {
            const pw1 = document.getElementById('password');
            const pw2 = document.getElementById('password2');
            if (pw1 && pw2 && pw1.value !== pw2.value) {
                e.preventDefault();
                alert('Las contraseñas no coinciden. Por favor revisa.');
                pw2.focus();
            }
        });
    }

});
