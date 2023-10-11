<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <header>
        <section class="wrapper">
              <nav>
                  <ul>
                      <li><a href="#">Inicio</a></li>
                      <li><a href="index.php">Cerrar sesión</a></li>
                  </ul>
          </nav>
          </section>
      </header>

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://depaseoperu.com/wp-content/uploads/2023/06/Lima.jpg" class="d-block w-100" alt="...">
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
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
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
