<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="styleSheet">
    <title>Energy and Water</title>
    <link rel="Icon" href="Imagenes/IconoE.png">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
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
    </nav>
</header>

<body>
  <div class="banner">
    <h1>Mantenimiento </br> para edificios</h1>
    <h2>CLIMATIZACIÓN, ELECTRICIDAD Y OBRAS MENORES DE CONSTRUCCIÓN.</h2>
  </div>
  <div class= "container text-center seccion" id="seccion_inicio">
    <h1>Nuestros Servicios</h1>
    <div class="row">
      <div class="col-md-4 col-carrusel">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner carousel-imagenes">
            <div class="carousel-item active">
              <img src="https://www.energyandwater.cl/gallery_gen/3cf1905198e9763be7cf8a3276a8375b_559x1125_79x0_771x1125_crop.jpg?ts=1702866984" class="d-block w-100 " alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide. </p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-7">
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
        <h3>Resumen</h3>
        <p class="texto-justificado"> Bienvenido a Energy and Water SpA,  empresa dedicada a la instalación y reparación de sistemas de ventilación, calefacción, electricidad y construcción. Contamos con un equipo de profesionales altamente cualificados y con amplia experiencia en el sector. Ofrecemos soluciones a medida para cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con nosotros y solicita tu presupuesto sin compromiso. </p>
        <img class="imagen-resumen rounded" src="https://www.energyandwater.cl/gallery_gen/c4efc61dd95fc5f46d5bcca4a4602205_fit.jpg?ts=1702866984">
      </div>
      <div class="col-md-6">
        <h3>En qué punto nos encontramos</h3>
        <p class="texto-justificado">Somos una empresa fundada en 2018 con el objetivo de brindar servicios integrales de mantenimiento para hogares, oficinas, comercios e industrias. Nuestra misión es satisfacer las necesidades de nuestros clientes con eficiencia, rapidez y profesionalidad. Nuestra visión es ser la empresa referente en el mercado por nuestra excelencia y compromiso. Nuestros valores son la honestidad, la responsabilidad, el respeto y la innovación.</p>
        <div class="row">
          <div class="col-md-6">
            <img class="imagen-resumen2 rounded" src="https://www.energyandwater.cl/gallery_gen/5d11f12cdc2ed7cc9f331218cb5b9ca0_640x608_fit.jpg?ts=1702866984">
          </div>
          <div class="col-md-6">
            <img class="imagen-resumen2 rounded" src="https://www.energyandwater.cl/gallery_gen/bff51c94eebee5ca25ea6f9aeccc8491_640x608_fit.jpg?ts=1702866984">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class= "container text-center seccion" id="seccion_Equipo">
    <h1>Equipo</h1>
    <p>Compartimos una visión clara del objetivo, fomentamos un clima de confianza, colaboración y apoyo mutuo entre los integrantes del equipo.</p>
    <h3 class="text-start">Liderazgo</h3>
    <p class="texto-justificado">Mizraim Abello es el fundador de Energy and Water SpA, es un líder colaborativo que se desempeña en el ámbito laboral, específicamente en el sector de la climatización y electricidad. Practica un liderazgo democrático; es decir, que involucra al equipo de trabajo en la toma de decisiones y valora sus opiniones y sugerencias. Sus principales habilidades como líder son la resolución de problemas, la comunicación efectiva, el pensamiento crítico, la capacidad de coordinación y gestión. Algunos de los logros más destacados son haber participado en la acreditación de los centros de salud de la municipalidad de San Joaquín, reparación del equipo de climatización para el museo de la Universidad de los Andes y haber realizado reparaciones y cambios de grupos electrógenos que son críticos para el funcionamiento de los edificios. Uno de los desafíos que enfrentó como líder fue adaptarse a las nuevas normativas sanitarias por la pandemia y garantizar la seguridad del equipo y los clientes. Lo logró implementando protocolos de prevención y capacitando al personal. Su objetivo como líder es darle continuidad operacional a los clientes y mejorar constantemente los procesos de mantenimiento y calidad. </p>
    <h3>Este es nuestro equipo</h3>
    <p>En Energy And Water SpA nos dedicamos a crear ambientes gratos y confortables a través del mantenimiento para calderas, aire acondicionado, salas de bombas, grupos electrógenos y electricidad, entre otros.</p>
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
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
          </div>
        </div>
      </div>
      <div class="col-md-6">
      <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="container text-center seccion" id="seccion_formulario">
    <form class="row g-3" action="/formulario" method="GET">
      <div class="titulo-formulario" >
        <h1>Formulario de contacto</h1>
        <p>Ofrecemos soluciones a medida para cada cliente, garantizando la calidad y la seguridad de nuestros servicios. Contacta con nosotros y solicita tu presupuesto sin compromiso. <br> Ingresando los siguientes datos:</p>
      </div>
      <div class="col-md-6">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
          <label for="nombre">Nombre</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="email" name="imail" placeholder="Email" required>
          <label for="email">E-mail</label>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
          <label for="direccion">Dirección</label>
        </div>
      </div>
      <div class="col-md-6">
        <label for="servicios" class="form-label">Servicios</label>
        <select class="form-select" aria-label="Default select example" name="servicios" id="servicios" required>
            <option selected value=""> Seleccione el servicio a solicitar</option>
            <option value="Mantenimiento">Mantenimiento</option>
            <option value="Mantenimiento_preventivo">Mantenimiento preventivo</option>
            <option value="Mantenimiento_correctivo">Mantenimiento correctivo</option>
        </select>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="4" name="mensaje" placeholder="Ingrese mensaje" required></textarea>
        </div>
      </div>
      <div class="form-check text-start">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
        <label class="form-check-label" for="flexCheckDefault">Acepto Termino y Condiciones</label>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary btnEnviar">Enviar Formulario</button>
      </div>
    </form>
  </div> 

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
      <p>Teléfono: +56 2 3256 9798</p>
      <p>Whatsapp: +56 9 3083 5203</p>
    </div>
    <div class="box">
      <h2>SIGUENOS</h2>
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