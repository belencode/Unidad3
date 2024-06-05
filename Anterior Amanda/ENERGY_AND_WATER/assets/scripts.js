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

function mostrarInfoServicios(id, boton, imagen) {
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
        mostrarInfoServicios('infoServicio1', primerBotonServicio, 'https://www.energyandwater.cl/gallery_gen/3cf1905198e9763be7cf8a3276a8375b_559x1125_79x0_771x1125_crop.jpg?ts=1702866984')
        
        ; // Mostrar inicialmente la información del primer botón de servicios
    }
});


/*boton dia y noche*/

let toggle=document.getElementById("toggle");
let label_toggle=document.getElementById("label_toggle");
var header = document.querySelector("header");
//let h1 = document.querySelector("h1");
let h2 = document.querySelector("h2");
let p = document.querySelector("p");


let header2 = document.querySelector("nav");
//let document.getElementById("lightmodificado");
//let imgchange=document.getElementById("imgchange");
//let header =document.getElementById("Header_color_diaynoche");


// no se pudo D; let modal = document.getElementById("mensajeModal");


toggle.addEventListener("change",(Event)=>{
  let checked=Event.target.checked;
  document.body.classList.toggle("dark");
 if (checked==true){
  label_toggle.innerHTML="<i class='fa-solid fa-sun'>"
  //document.getElementById('imgchange').src = "img/fotomodonoche.JPG";
  header.classList.add("dark");
  header2.classList.add("dark")
  h1.classList.add("dark")
  h2.classList.add("dark")
  p.classList.add("dark")
  //modal.classList.add("dark");
 }else{
  label_toggle.innerHTML="<i class='fa-solid fa-moon'>" 
  //document.getElementById('imgchange').src = "img/fotomododia.JPG";
  header.classList.remove("dark");
  header2.classList.remove("dark")
  h1.classList.remove("dark")
  h2.classList.remove("dark")
  p.classList.remove("dark")

  //modal.classList.remove("dark")
 }

})



/* cambios de js para tipos de dispocitivos */

document.addEventListener('DOMContentLoaded', function() {
    var scriptBootstrap = document.createElement('script');
    scriptBootstrap.src = 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js';
    document.body.appendChild(scriptBootstrap);
  });

  function mostrarInfoServicios(id, boton) {
    var info = document.getElementById(id);
    var botones = document.getElementsByClassName('boton-servicios');
    var infos = document.getElementsByClassName('infoServicios');
    
    // Ocultar todas las descripciones
    for (var i = 0; i < infos.length; i++) {
      infos[i].style.display = 'none';
    }
    
    // Quitar la clase activa de todos los botones
    for (var i = 0; i < botones.length; i++) {
      botones[i].classList.remove('activo');
    }
    
    // Mostrar la descripción correspondiente y agregar la clase activa al botón
    info.style.display = 'block';
    boton.classList.add('activo');
  }

  //valida nombre

 
    
  function validaForm() {
    let nombre = document.getElementById("nombre").value;
    let email = document.getElementById("email").value;
    let btnAgregar = document.getElementById("btnAgregar");
    let direccion = document.getElementById("direccion").value;
    let mensaje = document.getElementById("mensaje").value;
    
    
    // se intento... let terminos = document.getElementById("terminos").value; 
       


  
    if (nombre != '' && email != '' && direccion != '' && mensaje != ''){
        btnAgregar.disabled = false;
    } else {
        btnAgregar.disabled = true;
    }
  }

  function validarNombre(event) {
    let input = event.target;
    let regexNombre = /^[a-zA-ZáéíóúÁÉÍÓÚ\s]*$/;

    if (!regexNombre.test(input.value)) {
        // Remover el último carácter si no cumple con la expresión regular
        input.value = input.value.slice(0, -1);
        alert("El nombre solo puede contener letras y espacios.");
    }
}

window.onload = function() {
    let nombreInput = document.getElementById("nombre");
    nombreInput.addEventListener("input", validarNombre);
};




  

 