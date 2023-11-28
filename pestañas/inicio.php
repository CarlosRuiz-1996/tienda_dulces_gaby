<?php
require_once 'controllers/UsuarioController.php';

// $usu = new Usuario();
// $usu->ValidaIdentity();
Utils::ValidaIdentity();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/43e6f12e14.js" crossorigin="anonymous"></script>
  <title>Inicio - DeliAmaite</title>
</head>

<body>
  <section class="banner">
    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="../img/bgg4.png" alt="" class="image" />
          <div class="image-data">
            <span class="text">Disfruta toda la variedad.</span>
            <h2>
              Mejora tu experienca <br />
              con las mejores semillas
            </h2>
            <a href="#" class="button">Ver catalogo</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="../img/bgg5.png" alt="" class="image" />
          <div class="image-data">
            <span class="text">¿Alguien dijo Chocolates?</span>
            <h2>
              Gran variedad y diversidad <br />
              De chocolates
            </h2>
            <a href="#" class="button">Ver catalogo</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="../img/bgg6.png" alt="" class="image" />
          <div class="image-data">
            <span class="text">Botanas las necesarias</span>
            <h2>
              Una gran variedad de botanas <br />
              Tendras que probarlas todas
            </h2>
            <a href="#" class="button">Ver catalogo</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>

    <script src="../js/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <a href="https://api.whatsapp.com/send?phone=+525577675307" class="btn-wsp" target="_blank">
      <i class="fa fa-whatsapp icono"></i>
    </a>
  </section>
  <div class="overlay">
    <nav>
      <header>
        <img src="../img/logo.png" alt="" class="logo">
      </header>
      <ul id="navMenu">
        <li><a href="#" class="active"> <i class="fa-solid fa-house"></i> INICIO</a></li>
        <li><a href="#"> <i class="fa-solid fa-seedling"></i> PRODUCTOS</a></li>
        <li><a href="#"><i class="fa-solid fa-user"></i> CUENTA</a></li>
        <li><a href="#"> <i class="fa-solid fa-cart-shopping"></i> </a></li>
        <li><a href="#"> <i class="fa-sharp fa-solid fa-address-card"></i> CONTACTANOS</a></li>
        <li><a href="<?= base_url ?>usuario/logout"> <i class="fa fa-sign-out"></i>LOGOUT</a></li>

      </ul>

    </nav>
    <script type="text/javascript">
      window.addEventListener("scroll", function() {
        var nav = document.querySelector(nav);
        nav.classList.toggle("sticky", window.scrollY > 0);
      })
    </script>
  </div>

  <Section class="somos">
    <div class="infosomos">

      <h2>¿QUIENES SOMOS?</h2>
      <P> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ullam provident tempora rerum nemo
        praesentium soluta laborum laudantium repellat, asperiores exercitationem, consequatur consequuntur dicta
        dolor nulla reprehenderit, alias doloribus atque. Dolore, nostrum! Provident vel ad odio, laborum suscipit
        libero fugit quis est nulla incidunt, deleniti, necessitatibus alias a sit sunt magnam totam vitae assumenda. Iusto nihil iure vel aperiam excepturi.
      </P>

      <h2>Te aseguramos</h2>

      <div class="asegurar">
        <ul>
          <i class="fa-sharp fa-solid fa-circle-check"></i>
          <p>La mejor calidad de productos</p>
          </li>
          <li></li>

        </ul>
      </div>
    </div>


  </Section>

</body>

</html>