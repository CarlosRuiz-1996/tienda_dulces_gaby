
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>css/styleIndex.css">
    <link rel="stylesheet" href="<?=base_url?>css/swiper-bundle.min.css" />
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/43e6f12e14.js" crossorigin="anonymous"></script>
    <title>DeliAmaite</title>
</head>
<body>
    <section class="banner">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?=base_url?>img/bgg1.png" alt="" />
       <!--    <div class="centered">
            <a href="#" class="btn-neon">
              <span id="span1"></span>
              <span id="span2"></span>
              <span id="span3"></span>
              <span id="span4"></span>
              REGISTRARSE
          </a>
           </div> 
           <div class="centered2">
            <a href="#" class="btn-neon">
              <span id="span1"></span>
              <span id="span2"></span>
              <span id="span3"></span>
              <span id="span4"></span>
              INICIAR SESIÓN
          </a>
           </div>  -->
            <div class="info">Lorems ipsum dolor sit amet consectetur adipisicing elit. <br>
               Porro eos minima, laborum autem inventore ad.</div>
          </div>
          <div class="swiper-slide">
            <img src="<?=base_url?>img/bgg2.png" alt="" />
          <!--  <div class="centered">DeliAmaite</div> -->
         
            <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
              Porro eos minima, laborum autem inventore ad.</div>
          </div>
          <div class="swiper-slide">
            <img src="<?=base_url?>img/bgg3.png" alt="" />
           <!-- <div class="centered">DeliAmaite</div> -->
         
            <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
              Porro eos minima, laborum autem inventore ad.</div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
  
      <div class="swiper mySwiperdemo mypadding">
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
  
      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          loop: true,
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
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
  
      <script>
        var swiper = new Swiper(".mySwiperdemo", {
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 3,
          loop: true,
          loopFillGroupWithBlank: true,
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
    </section>
    <div class="overlay">
        <nav>
            <header>
                <img src="<?=base_url?>img/logo.png" alt="" class="logo">
            </header>
            <ul id="navMenu">
              <!--  <li><a href="#" class="active"> <i class="fa-solid fa-house"></i> INICIO</a></li>
                <li><a href="#"> <i class="fa-solid fa-seedling"></i> PRODUCTOS</a></li>
                <li><a href="#"> <i class="fa-sharp fa-solid fa-address-card"></i> CONTACTANOS</a></li> -->
                <li><a href="<?=base_url?>usuario/login" class="active"> <i class="fa-solid fa-right-to-bracket"></i></i> INICIAR SESIÓN </a></li>
                <li><a href="<?=base_url?>usuario/registro" class="active"><i class="fa-solid fa-user"></i> REGISTRARSE</a></li>
            </ul>
        </nav>

       
        </div>
       

</body>
</html>