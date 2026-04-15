function iniciarReloj() {
    const tick = () => {
        const ahora = new Date();
        const opciones = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
        document.getElementById('fecha-actual').textContent = ahora.toLocaleDateString('es-ES', opciones);
        document.getElementById('reloj-vivo').textContent = ahora.toLocaleTimeString('es-ES');
    };
    setInterval(tick, 1000);
    tick();
}

const form = document.getElementById('form-articulo');
const feed = document.getElementById('contenedor-articulos');
const displayContador = document.getElementById('num-articulos');

let contador = document.querySelectorAll('article').length;
displayContador.textContent = contador;

form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const titulo = document.getElementById('titulo-art').value;
    const desc = document.getElementById('desc-art').value;

    const nuevoArt = document.createElement('article');
    nuevoArt.innerHTML = `<h3>${titulo}</h3><p><strong>Categoría:</strong> Reciente</p><p>${desc}</p>`;
    
    feed.prepend(nuevoArt);
    
    contador++;
    displayContador.textContent = contador;
    form.reset();
});

document.getElementById('form-contacto').addEventListener('submit', function(e) {
    e.preventDefault();
    alert("Gracias por contactarnos. Tu mensaje ha sido enviado.");
    this.reset();
});

document.addEventListener('DOMContentLoaded', iniciarReloj);