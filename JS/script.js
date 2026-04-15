// --- FUNCIONAMIENTO DEL RELOJ (REQUERIMIENTO 1) ---
function actualizarReloj() {
    const ahora = new Date();
    
    // Formato de fecha: Lunes, 14 de abril de 2026
    const opcionesFecha = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const fechaTexto = ahora.toLocaleDateString('es-ES', opcionesFecha);
    
    // Formato de hora con segundos: 21:30:05
    const horaTexto = ahora.toLocaleTimeString('es-ES');

    document.getElementById('fecha-actual').innerText = fechaTexto;
    document.getElementById('reloj-vivo').innerText = horaTexto;
}

// Ejecutar cada 1 segundo
setInterval(actualizarReloj, 1000);
actualizarReloj(); // Llamada inicial para evitar delay


// --- GESTIÓN DE ARTÍCULOS DINÁMICOS (REQUERIMIENTO 2 Y 4) ---
const formArticulo = document.getElementById('form-articulo');
const contenedorArticulos = document.getElementById('contenedor-articulos');
const contadorElemento = document.getElementById('num-articulos');

let contadorTotal = 0;

formArticulo.addEventListener('submit', function(evento) {
    evento.preventDefault(); // Evitar que la página se recargue

    // 1. Obtener valores de los campos
    const titulo = document.getElementById('titulo-art').value;
    const contenido = document.getElementById('desc-art').value;

    // 2. Crear la estructura del nuevo artículo
    const nuevoArticulo = document.createElement('article');
    
    // Insertar contenido HTML
    nuevoArticulo.innerHTML = `
        <h3>${titulo}</h3>
        <p><strong>Categoría:</strong> Reciente</p>
        <p>${contenido}</p>
    `;

    // 3. Agregar el artículo al inicio de la sección
    contenedorArticulos.prepend(nuevoArticulo);

    // 4. Actualizar el contador global
    contadorTotal++;
    contadorElemento.innerText = contadorTotal;

    // 5. Limpiar el formulario
    formArticulo.reset();
});


// --- FORMULARIO DE CONTACTO (REQUERIMIENTO 3) ---
const formContacto = document.getElementById('form-contacto');

formContacto.addEventListener('submit', function(evento) {
    evento.preventDefault();

    const nombre = document.getElementById('nombre-con').value;

    // Simulación de envío
    alert(`¡Gracias ${nombre}! Tu mensaje ha sido enviado correctamente al equipo de El Faro.`);
    
    formContacto.reset();
});