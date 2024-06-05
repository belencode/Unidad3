<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"


    link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Energy and Water</title>
    <link rel="Icon" href="Imagenes/IconoE.png">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<header id="header">
    <nav id="header" class="navbar2 navbar-expand-lg bg-light">
        <div class="container-fluid">
          <img src="https://www.energyandwater.cl/gallery_gen/570337542efebc8b8ea892bab7890674_360x360_fit.jpg?ts=1702866984" class="Logo_Menu">
          <a class="navbar-brand" href="#">
            <span class="color-logo-1">ENERGY</span>
            <span class="color-logo-2">&</span>
            <span class="color-logo-3">WATER</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion_historia">Historia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion_Equipo">Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion_preguntas_frecuentes">Preguntas Frecuentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion_formulario">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
        
        <div>
          <label for="toggle" id="label_toggle"><i class="fa-solid fa-moon"></i></label>  
              <input type="checkbox" id="toggle">
        
   
        </div>
    </nav>
</header>
<body>
  <div class="banner" style="font-size: 4vw !important; ">
    <h1>Mantenimiento </br> para edificios</h1>
    <h2>CLIMATIZACIÓN, ELECTRICIDAD Y OBRAS MENORES DE CONSTRUCCIÓN.</h2>
  </div>
  <div class= "container text-center seccion" id="seccion_inicio">
    <h1>Nuestros Servicios</h1>
    <div class="row row-servicios">
      <div class="col-md-6 info-servicios">
        <h2>Mantenimiento</h2>
        <p>Conjunto de operaciones y cuidados necesarios para que tus instalaciones continúen funcionando correctamente.</p>
        <h2>Mantenimiento preventivo</h2>
        <p>Ayuda a prolongar la vida útil de tus activos y aumenta la productividad, a través de una revisión.</p>
        <h2>Mantenimiento correctivo</h2>
        <p>Corrige problemas o daños en las instalaciones o equipos.</p>
      </div>
      <div class="col info-servicios">
        <img src="https://www.energyandwater.cl/gallery_gen/3cf1905198e9763be7cf8a3276a8375b_559x1125_79x0_771x1125_crop.jpg?ts=1702866984" class="imagen-servicio">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
      <img id="imagen-servicio" src="https://www.energyandwater.cl/gallery_gen/3cf1905198e9763be7cf8a3276a8375b_559x1125_79x0_771x1125_crop.jpg?ts=1702866984" class="imagen-servicio">
        
      </div>
      <div class="col-md-6">
      <div class="menu-servicios">
          <button class="boton-servicios" onclick="mostrarInfoServicios('infoServicio1',this,'https://www.energyandwater.cl/gallery_gen/3cf1905198e9763be7cf8a3276a8375b_559x1125_79x0_771x1125_crop.jpg?ts=1702866984')">Aire Acondicionado</button>
          <div id="infoServicio1" class="infoServicios">Instalamos, reparamos y revisamos todo tipo de sistemas de aire acondicionado, tanto domésticos como industriales. Nos encargamos de la limpieza, el cambio de filtros, la recarga de gas y la detección y solución de averías.</div>
          <button class="boton-servicios" onclick="mostrarInfoServicios('infoServicio2',this,'https://www.energyandwater.cl/gallery_gen/9d0c9a5af9f0a48e29f3d3b61818457e_640x1176_fit.jpg?ts=1702866984')">Sala de calderas</button>
          <div id="infoServicio2" class="infoServicios">Instalamos, reparamos y revisamos todo tipo de calderas, tanto de gas como eléctricas. Nos encargamos del mantenimiento preventivo, la sustitución de piezas, la purga de radiadores y la regulación de la presión y la temperatura. </div>
          <button class="boton-servicios" onclick="mostrarInfoServicios('infoServicio3',this,'https://www.energyandwater.cl/gallery_gen/1dff1ecb88d5aa605aa877c96cd9df8b_640x1116_fit.jpg?ts=1702866984')">Grupo electrógeno</button>
          <div id="infoServicio3" class="infoServicios">Instalamos, reparamos y revisamos todo tipo de grupos electrógenos, tanto monofásicos como trifásicos. Nos encargamos del suministro de combustible, el cambio de aceite, el control de baterías y la verificación del funcionamiento correcto. </div>
          <button class="boton-servicios" onclick="mostrarInfoServicios('infoServicio4',this,'https://www.energyandwater.cl/gallery_gen/6f174bfc2c2d263b250ab7bee3d6255f_640x1116_fit.jpg?ts=1702866984')">Sala de bombas</button>
          <div id="infoServicio4" class="infoServicios">Instalamos, reparamos y revisamos todo tipo de bombas hidráulicas, tanto centrífugas como periféricas. Nos encargamos del ajuste de válvulas, el cambio de sellos mecánicos, el equilibrado de rotores y la limpieza de impulsores. </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Aire acondicionado
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">
                Instalamos, reparamos y revisamos todo tipo de sistemas de aire acondicionado, tanto domésticos como industriales. Nos encargamos de la limpieza, el cambio de filtros, la recarga de gas y la detección y solución de averías.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Sala de calderas
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">
              Instalamos, reparamos y revisamos todo tipo de calderas, tanto de gas como eléctricas. Nos encargamos del mantenimiento preventivo, la sustitución de piezas, la purga de radiadores y la regulación de la presión y la temperatura.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Grupo electrógeno
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
              <div class="accordion-body">
                Instalamos, reparamos y revisamos todo tipo de grupos electrógenos, tanto monofásicos como trifásicos. Nos encargamos del suministro de combustible, el cambio de aceite, el control de baterías y la verificación del funcionamiento correcto. 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                Sala de bombas
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
              <div class="accordion-body">
              Instalamos, reparamos y revisamos todo tipo de bombas hidráulicas, tanto centrífugas como periféricas. Nos encargamos del ajuste de válvulas, el cambio de sellos mecánicos, el equilibrado de rotores y la limpieza de impulsores. 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class= "container text-center seccion" id="seccion_historia">
    <h1>Historia</h1>
    <p>Creando ambientes gratos y confortables a través del mantenimiento</p>
    <div class="row">
      <div class="col-md-6">
        <p class="texto-justificado"> Bienvenido a Energy and Water SpA,  empresa dedicada a la instalación y reparación de sistemas de ventilación, calefacción, electricidad y construcción. Contamos con un equipo de profesionales altamente cualificados y con amplia experiencia en el sector. Ofrecemos soluciones a medida para cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con nosotros y solicita tu presupuesto sin compromiso. </p>
        <img class="imagen-resumen" src="https://www.energyandwater.cl/gallery_gen/c4efc61dd95fc5f46d5bcca4a4602205_fit.jpg?ts=1702866984">
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <img class="imagen-resumen2" src="https://www.energyandwater.cl/gallery_gen/5d11f12cdc2ed7cc9f331218cb5b9ca0_640x608_fit.jpg?ts=1702866984">
            <div class="card-body">
              <h6 class="card-text">Universidad de Los Andes</h6>
            </div>
          </div>
          <div class="col-md-6">
            <img class="imagen-resumen2" src="https://www.energyandwater.cl/gallery_gen/bff51c94eebee5ca25ea6f9aeccc8491_640x608_fit.jpg?ts=1702866984">
            <div class="card-body">
              <h6 class="card-text">Viña Cousiño Macul</h6>
            </div>
          </div>
        </div>
        <h2>En qué punto nos encontramos</h2>
        <p class="texto-justificado">Somos una empresa fundada en 2018 con el objetivo de brindar servicios integrales de mantenimiento para hogares, oficinas, comercios e industrias. Nuestra misión es satisfacer las necesidades de nuestros clientes con eficiencia, rapidez y profesionalidad. Nuestra visión es ser la empresa referente en el mercado por nuestra excelencia y compromiso. Nuestros valores son la honestidad, la responsabilidad, el respeto y la innovación.</p>
      </div>
    </div>
  </div>
  <div class= "container text-center seccion" id="seccion_Equipo">
    <h1>Equipo</h1>
    <p>Compartimos una visión clara del objetivo, fomentamos un clima de confianza, colaboración y apoyo mutuo entre los integrantes del equipo.</p>
    <div class="row">
      <div class="col-md-8">
        <h2 class="text-start">Liderazgo</h2>
        <p class="texto-justificado">Mizraim Abello es el fundador de Energy and Water SpA, es un líder colaborativo que se desempeña en el ámbito laboral, específicamente en el sector de la climatización y electricidad. Practica un liderazgo democrático; es decir, que involucra al equipo de trabajo en la toma de decisiones y valora sus opiniones y sugerencias. Sus principales habilidades como líder son la resolución de problemas, la comunicación efectiva, el pensamiento crítico, la capacidad de coordinación y gestión. Algunos de los logros más destacados son haber participado en la acreditación de los centros de salud de la municipalidad de San Joaquín, reparación del equipo de climatización para el museo de la Universidad de los Andes y haber realizado reparaciones y cambios de grupos electrógenos que son críticos para el funcionamiento de los edificios. Uno de los desafíos que enfrentó como líder fue adaptarse a las nuevas normativas sanitarias por la pandemia y garantizar la seguridad del equipo y los clientes. Lo logró implementando protocolos de prevención y capacitando al personal. Su objetivo como líder es darle continuidad operacional a los clientes y mejorar constantemente los procesos de mantenimiento y calidad. </p>
      </div>
      <div class="col-md-4">
        <img class="imagen-resumen" src="https://www.energyandwater.cl/gallery_gen/0b901c86ff523e2ff3dcc5c6fff6e437_fit.jpg?ts=1702866984">
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
      <img class="imagen-resumen" src="https://www.energyandwater.cl/gallery_gen/9fca2b80ef03973c6c70faaa8fa3a5a5_fit.jpg?ts=1702866984">
      </div>
      <div class="col-md-4">
        <h2>Este es nuestro equipo</h2>
        <p class="texto-justificado">En Energy And Water SpA nos dedicamos a crear ambientes gratos y confortables a través del mantenimiento para calderas, aire acondicionado, salas de bombas, grupos electrógenos y electricidad, entre otros.</p>
      </div>
    </div>  

    <div class="row justify-content-evenly">
      <div class="card" style="width: 18rem;">
        <img src="https://www.energyandwater.cl/gallery_gen/5d11f12cdc2ed7cc9f331218cb5b9ca0_640x608_fit.jpg?ts=1702866984" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Mizraim Abello Avello</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://www.energyandwater.cl/gallery_gen/5d11f12cdc2ed7cc9f331218cb5b9ca0_640x608_fit.jpg?ts=1702866984" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Marcelo Fuentes Orellana</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://www.energyandwater.cl/gallery_gen/5d11f12cdc2ed7cc9f331218cb5b9ca0_640x608_fit.jpg?ts=1702866984" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Nombre Apellido</p>
        </div>
      </div>
    </div>
  </div>
  <div class= "container text-center seccion" id="seccion_preguntas_frecuentes">
    <h1>Preguntas Frecuentes</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="menu-preguntas">
          <button class="boton-preguntas" onclick="mostrarInfo('info1',this)">¿Cómo solicito una cotización?</button>
          <button class="boton-preguntas" onclick="mostrarInfo('info2',this)">¿Necesitas visita técnica?</button>
          <button class="boton-preguntas" onclick="mostrarInfo('info3',this)">¿Qué tipo de aire acondicionado pueden revisar?</button>
          <button class="boton-preguntas" onclick="mostrarInfo('info4',this)">¿Realizan instalación de aire acondicionado domiciliario?</button>
        </div>  
      </div>
      <div class="col-md-6">
        <div id="info1" class="info">Puedes contactarnos al correo Contacto@energyandwater.cl o al +56232569798.</div>
        <div id="info2" class="info">Puedes solicitar visita técnica para evaluación mediante correo electrónico Contacto@energyandwater.cl o al +56232569798</div>
        <div id="info3" class="info">Revisamos, reparamos e instalamos equipos domiciliarios e industriales.</div>
        <div id="info4" class="info">Información para el Botón 4</div>
        <br>
        <a class="btn btn-secondary btn-lg btnEnviar" href="#seccion_formulario">Contáctanos</a>
      </div>
    </div>






  </div>
  <div class="container text-center seccion seccion-formulario" id="seccion_formulario">
    <form class="row g-3" action="/formulario" method="GET">
      <div class="titulo-formulario" >
        <h4 class="texto-blanco">Formulario de contacto</h4>
        <h5 class="texto-blanco">Ofrecemos soluciones a medida para cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con nosotros y solicita tu presupuesto sin compromiso. Ingresando los siguientes datos:</h5>
      </div>
      <div class="col-md-6">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nombre" name="nombre"  onkeyup="validaForm()" placeholder="Nombre" required>
          <label for="nombre">Nombre</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" name="imail" onkeyup="validaForm()"  placeholder="Email" required>
          <label for="email">E-mail</label>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="direccion" name="direccion" onkeyup="validaForm()" placeholder="Direccion" required>
          <label for="direccion">Dirección</label>
        </div>
      </div>
      <div class="col-md-6">
        <label for="servicios" class="form-label"><h5>Servicios</h5></label>
        <select class="form-select" aria-label="Default select example" name="servicios" id="servicios" required>
            <option selected value=""> Seleccione el servicio a solicitar</option>
            <option value="Mantenimiento">Mantenimiento</option>
            <option value="Mantenimiento_preventivo">Mantenimiento preventivo</option>
            <option value="Mantenimiento_correctivo">Mantenimiento correctivo</option>
        </select>
        <br>
        <div class="form-check text-start">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
        <label class="form-check-label" for="flexCheckDefault"> <h5>Acepto Termino y Condiciones</h5></label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
            <label for="mensaje" class="form-label"><h5>Mensaje</h5></label>
            <textarea class="form-control" id="mensaje" onkeyup="validaForm()" rows="4" name="mensaje" placeholder="Ingrese mensaje" required></textarea>
        </div>
      </div>  
      <div class="col-12">
        <button type="submit" id="btnAgregar" class="btn btn-secondary btn-lg btnEnviar" disabled>Enviar Formulario</button>
      </div>
    </form>
  </div> 
  <script src="assets/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<footer class="pie_pagina">
  <div class="grupo-1">
    <div class="box">
      <figure>
        <img class="logo_redondo" src="https://www.energyandwater.cl/gallery_gen/570337542efebc8b8ea892bab7890674_360x360_fit.jpg?ts=1702866984" alt="Logo de ENERGY AND WATER SPA ">
      </figure>
    </div>
    <div class="box">
      <h2> CONTACTO</h2>
        <p>Correo electrónico de contacto: contacto@energyandwater.cl</p>
        <p>Dirección física: Manquehue Sur 520, oficina 205, Las Condes </p>
    </div>
    <div class="box">
      <br>
      <br>
      <p>Teléfono: +56 2 3256 9798</p>
      <p>Whatsapp: +56 9 3083 5203</p>
    </div>  
    <div class="box">
      <h3>SIGUENOS</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-twitter"></a>
    </div>
  </div>
  <div class="grupo-2">
    <small>&copy; 2024 <b>Energy and Water</b>-Todos los derechos reservados.</small>
  </div>
</footer>
</html>
