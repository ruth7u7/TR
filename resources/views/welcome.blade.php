<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
    <body>
        <header>
            <section class="wrapper">
                  <nav>
                      <ul>
                          <li><a href="#">Inicio</a></li>
                          <li><a href="{{ route('cliente.login')}}">Iniciar sesión</a></li>
                      </ul>
              </nav>
              </section>
          </header>
                                  <!--CAROUSEL/slider-->
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://127.0.0.1:8000/img/LugaresTuristicos/lima.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="cuzco.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="ica.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
                  <!--Tarjetas/Card para cada ciudad-->
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="lima.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lima</h5>
                      <p class="card-text">    Capital de Perú.
                        Lugar de nacimiento del ceviche.
                        Sede de Machu Picchu.
                        Visita obligada para  amantes de la historia y la cultura.</p>
                      <a href="./Ciudades/Lima.html" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="aqp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Arequipa</h5>
                      <p class="card-text">    La ciudad blanca
                        Un destino ideal para los amantes de la arquitectura colonial
                        Un lugar perfecto para explorar el Cañón del Colca</p>
                      <a href="./Ciudades/Arequipa.html" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkmtmCpzZfaXjx3WNG_nIiFNGzf_VplUaCr5v-NR1uIxbtzuJgBTobK8VdsFiTCs5uwgI&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ica</h5>
                      <p class="card-text">    La tierra del pisco
                        Un destino ideal para los amantes del vino
                        Un lugar perfecto para disfrutar de la naturaleza</p>
                      <a href="./Ciudades/Ica.html" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
              </div>
            </div>

            <br>

          </div>
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/33/fc/ba/cusco.jpg?w=700&h=500&s=1" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cuzco</h5>
                      <p class="card-text">    La antigua capital del Imperio Inca
                        Una ciudad llena de historia y cultura
                        Un lugar perfecto para explorar las ruinas incas</p>
                      <a href="./Ciudades/Cuzco.html" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.mnstatic.com/0b/65/0b65e30d7bedf13dfb35fb46476150b1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Máncora</h5>
                      <p class="card-text">    Un paraíso tropical en la costa peruana
                        Un destino ideal para el descanso
                        Un lugar perfecto para practicar deportes acuáticos</p>
                      <a href="./Ciudades/Mancora.html" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="aqp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ayacucho</h5>
                      <p class="card-text">    La ciudad de las 33 iglesias
                        Un importante centro religioso y cultural
                        Un destino ideal para los amantes de la historia y la cultura</p>
                      <a href="./Ciudades/Ayacucho.html" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
              </div>
              <br>
            </div>
            <br>
          </div>
          <br>

          <!--Pie de página-->

          <footer class="main-footer">
            <div class="footer__section">
              <h3 class="footer__title">Senati Tours</h3>
              <p class="footer__txt">
                  Senati Tours es el mayor servicio de compra de pasajes de bus en línea,
                  garantizado por más de 25 millones de usuarios felices y satisfechos.
                  Senati Tours ofrece la compra de pasajes de bus a través de su página web para todas las rutas más importantes en Perú
              </p>
            </div>

            <div class="footer__section">
              <h2 class="footer__title">Terminales :</h2>
              <p class="footer__txt">Ubicacion:</p>
              <p class="footer__txt">Terminar plaza norte/Independecia</p>
              <p class="footer__txt">Terminal Terrestre Atocongo</p>
              <p class="footer__txt">Terminal Marco Polo (Ex Fiori)</p>
              <p class="footer__txt">La yapa: Terminales en La Victoria</p>
            </div>

            <div className="footer__section">
                <h2 className="footer__title">Menu :</h2>
                <ul>
                    <li><a href="#" className="footer__link">INICIO</a></li>
                    <li><a href="#" className="footer__link">CONTACTO</a></li>
                </ul>

            </div>
            <div className="footer__section">
                <h2 className="footer__title">Redes sociales :</h2>
                <ul>
                    <li><a href="" className="footer__link"><i className="fa-brands fa-square-facebook"></i> Facebook</a></li>
                    <li><a href="" className="footer__link"><i className="fa-brands fa-square-instagram"></i> Instagram</a></li>
                    <li><a href="" className="footer__link"><i className="fa-brands fa-square-whatsapp"></i> Whatsapp</a></li>
                </ul>
            </div>

            <!-- Resto del contenido del footer con estilos en línea -->

            <p class="copy">
                © 2023 Senati Tours TR. Todos los derechos reservados | Design by Grupo 5
            </p>
          </footer>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
