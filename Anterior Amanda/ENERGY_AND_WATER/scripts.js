function mostrarInfo(id, boton) {
    // Ocultar todos los elementos con la clase 'info'
    var infos = document.querySelectorAll('.info');
    infos.forEach(function(info) {
        info.style.display = 'none';
    });

    // Mostrar el elemento seleccionado
    var infoSeleccionada = document.getElementById(id);
    infoSeleccionada.style.display = 'block';

    // Remover la clase 'activo' de todos los botones
    var botones = document.querySelectorAll('.boton-preguntas');
    botones.forEach(function(btn) {
        btn.classList.remove('activo');
    });
    // Agregar la clase 'activo' al botón seleccionado
    boton.classList.add('activo');
}
function mostrarInfoServicios(id, boton) {
    // Ocultar todos los elementos con la clase 'info'
    var infoserv = document.querySelectorAll('.info-Servicios');
    infoserv.forEach(function(infoServicios) {
        infoServicios.style.display = 'none';
    });

    // Mostrar el elemento seleccionado
    var infoServicioSeleccionada = document.getElementById(id);
    infoServicioSeleccionada.style.display = 'block';

    // Remover la clase 'activo' de todos los botones
    var botonesServicio = document.querySelectorAll('.boton-servicios');
    botonesServicio.forEach(function(btnServicio) {
        btnServicio.classList.remove('activate');
    });
    // Agregar la clase 'activo' al botón seleccionado
    boton.classList.add('activate');
}
// Función para mostrar información inicial al cargar la página
document.addEventListener("DOMContentLoaded", function() {
    var primerBoton = document.querySelector('.boton-preguntas');
    if (primerBoton) {
        mostrarInfo('info1', primerBoton); // Mostrar inicialmente la información del primer botón
    }

    var primerBotonServicio = document.querySelector('.boton-servicios');
    if (primerBotonServicio) {
        mostrarInfoServicios('infoServicio1', primerBotonServicio); // Mostrar inicialmente la información del primer botón de servicios
    }
});
