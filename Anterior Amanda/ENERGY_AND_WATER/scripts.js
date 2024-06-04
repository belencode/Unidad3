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
function mostrarInfoServicios(id, boton,imagen) {
    // Ocultar todos los elementos con la clase 'info'
    var infos = document.querySelectorAll('.infoServicios');
    infos.forEach(function(infoServicios) {
        infoServicios.style.display = 'none';
    });

    // Mostrar el elemento seleccionado
    var infoServicioSeleccionada = document.getElementById(id);
    infoServicioSeleccionada.style.display = 'block';

    // Remover la clase 'activo' de todos los botones
    var botones = document.querySelectorAll('.boton-servicios');
    botones.forEach(function(btn) {
        btn.classList.remove('activo');
    });
    // Agregar la clase 'activo' al botón seleccionado
    boton.classList.add('activo');

    //modificar la imagen según el boton seleccionado
    var img = document.getElementById('imagen-servicio');
    img.src = imagen;
}
// Función para mostrar información inicial al cargar la página
document.addEventListener("DOMContentLoaded", function() {
    var primerBoton = document.querySelector('.boton-preguntas');
    if (primerBoton) {
        mostrarInfo('info1', primerBoton); // Mostrar inicialmente la información del primer botón
    }

    var primerBotonServicio = document.querySelector('.boton-servicios');
    if (primerBotonServicio) {
        mostrarInfoServicios('infoServicio1', primerBotonServicio, 'https://www.energyandwater.cl/gallery_gen/3cf1905198e9763be7cf8a3276a8375b_559x1125_79x0_771x1125_crop.jpg?ts=1702866984'); // Mostrar inicialmente la información del primer botón de servicios
    }
});
