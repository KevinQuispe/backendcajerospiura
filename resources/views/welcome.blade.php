<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>App Cajeros Piura</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<style type="text/css">
  #header.header-scrolled {
    background: rgba(51, 33, 96, 0.9);
    padding: 20px 0;
    height: 72px;
    transition: all 0.5s;
}
</style>
  <!-- Favicons -->
  <!--link href="img/favicon.png" rel="icon"-->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('welcome/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('welcome/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('welcome/lib/animate/animate.min.css')}}" rel="stylesheet"> 
  <link href="{{ asset('welcome/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet"> 
  <link href="{{ asset('welcome/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet"> 
  <link href="{{ asset('welcome/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet"> 
  
  <!-- Libraries CSS Files -->
  <link href="{{ asset('welcome/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet"> 

  <!-- Main Stylesheet File -->
  <link href="{{ asset('welcome/css/style.css')}}" rel="stylesheet"> 

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">App Cajeros Piura</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Intro</a></li>
                <li><a href="#portfolio">Galeria</a></li>
          <li><a href="#team">Desarrollador</a></li>
          <li><a href="#contact">Contactanos</a></li>

           @if (Route::has('login'))
                        @if (Auth::check())
                            <a class="page-scroll" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="page-scroll btn-success rounded"  href="{{ url('/login') }}">Login</a>
                        @endif
                    @endif
                </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="../welcome/img/intro-carousel/6.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Encuentra tu cajero más cercano</h2>
                <p>Encuentra los cajeros mas ceranos de acuerdo a tu ubicación,y saber que cajros esta en buen funcionamiento</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="../welcome/img/intro-carousel/7.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cajeros automaticos de Scotiabank</h2>
                <p>Encuentra los cajeros mas cercanos de scotinbank</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="../welcome/img/intro-carousel/8.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cajeros automaticos de BCP</h2>
                <p>Encuentra los cajeros mas cercanos de BCP</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="../welcome/img/intro-carousel/9.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cajeros automaticos de BBVA</h2>
                <p>Encuentra los cajeros mas cercanos del BBVA</p>
                <a href="#featured-services" class="btn-get-started scrollto">Empezar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="../welcome/img/intro-carousel/10.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <h2>Cajeros automaticos de Multired</h2>
              <p>Encuentra los cajeros mas cercanos de Banco de la Nación Multired</p>
             <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Ojetivo Principal</a></h4>
            <p class="description">
            Implementar una aplicación móvil para la localización de cajeros automáticos más cercanos al usuario en la ciudad de Piura.
            </p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Objetivos Especificos</a></h4>
            <p class="description">
                <ol class="col-lg-10 ">
                    <li><p>Determinar los procesos de la aplicación</p> </li>
                    <li><p> Desarrollar la aplicación usando ingeniera de software.</p> </li>
                    <li><p>Evaluar el impacto de la utilización de una aplicación móvil para la detección y localización de cajeros automáticos más cercanos al usuario </p> </li>
                </ol>
            </p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Delimitación</a></h4>
            <p class="description">
            El proyecto se desarrollará única y exclusivamente para localizar los cajeros automáticos más cercanos al usuario según la necesidad del mismo dentro de la ciudad de Piura.
            </p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Introducción</h3>
          <p>
          Los motivos o las razones por las cuales se lleva a cabo esta
          investigación son por la necesidad de dar a los usuarios una alternativa de solución para ahorrar tiempo y dinero a partir de una aplicación móvil que nos brindará la 
          información de localización de los cajeros automáticos.
          
          </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="../welcome/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Justificación</a></h2>
              <p>
              Los motivos o las razones por las cuales se lleva a cabo esta investigación son por la necesidad de dar a los usuarios una alternativa de solución para ahorrar tiempo y dinero a partir de una aplicación móvil que nos brindará la información de localización de los cajeros automáticos.    
            </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="../welcome/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Importancia</a></h2>
              <p class="text-justify">
              Es importante el hecho de implementar nuevas opciones de servicios en tecnologías móviles para tener acceso rápido a información dinámica y activa. Los usuarios de cajeros automáticos de la ciudad de Piura se verán beneficiados al utilizar la aplicación móvil. de modo que podrán acceder de manera rápida. 
            </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="../welcome/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Benficiarios</a></h2>
              <p class="text-justify">
                Los beneficiarios son los usuarios de la ciudad de Piura, en la cual dicha invstigacion está enfocada en el desarrollo de una aplicación móvil como medio que facilite al usuario el acceso a información de la ubicación de los cajeros automáticos más cercanos al usuario      
            </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Realidad Problematica</h3>
        <p class="text-justify"> 
        El uso de los cajeros automáticos en la ciudad de Piura es uno de los servicios que la mayoría de personas mayores de 18 años que tienen una cuenta bancaria utilizamos puesto que para los usuarios de las tarjetas electrónicas resulta más cómodo usar los cajeros automáticos que ir hasta las entidades financieras a realizar algún retiro o transferencia ya que en dichas entidades se realizan varias operaciones por lo que hay más cantidad de gente lo que implica que tardaran en ser atendidos.
        A muchos de nosotros nos ha pasado que cuando queremos hacer uso del servicio de cajeros automáticos recurrimos a los que conocemos porque están dentro de nuestra rutina diaria y cuando cambiamos la misma nos damos con la sorpresa que hay un cajero mucho más cerca, el hecho de no saber dónde podemos encontrar el cajero automático más cercano a nuestra ubicación  hace que tengamos que llevar a cabo el recorrido hacia el más conocido, esto genera que tengamos una pérdida de tiempo y dinero.
    </p>
     <a class="cta-btn" href="#">Problematica</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galeria</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="../welcome/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="../welcome/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Desarrollador</h3>
          <p>
             Bach. Richard Paul Saucedo Garcia
            </p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 col-lg-offset-3 wow fadeInUp imagen">
            <div class="member">
              <img src="https://scontent.ftru2-1.fna.fbcdn.net/v/t1.0-9/1939849_257072321138239_1108783172_n.jpg?_nc_cat=105&_nc_ht=scontent.ftru2-1.fna&oh=3d083b68ab2575cf407729c5d984d685&oe=5D8F1083" class="img-fluid" alt="">
              
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Richard Paul</h4> 
                  <span>Ingeniero Informático</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contactactanos</h3>
          <p>
            Si quieres acceder  a nuestro servicio puedes comunicarte con nosotros      
        </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>App Cajeros Piura</h3>
            <p>
            Implementar una aplicación móvil para la localización de cajeros automáticos más cercanos al usuario en la ciudad de Piura.
          </p>
        </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Intro</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Desarrollador</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Contactanos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by RS
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ asset('welcome/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('welcome/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('welcome/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('welcome/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('welcome/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('welcome/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ asset('welcome/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('welcome/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('welcome/lib/counterup/counterup.min.js')}}"></script> 
  <script src="{{ asset('welcome/lib/owlcarousel/owl.carousel.min.js')}}"></script> 
  <script src="{{ asset('welcome/lib/isotope/isotope.pkgd.min.js')}}"></script> 
  <script src="{{ asset('welcome/lib/lightbox/js/lightbox.min.js')}}"></script> 
  <script src="{{ asset('welcome/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script> 
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('welcome/contactform/contactform.js')}}"></script> 
  <!-- Template Main Javascript File -->
  <script src="{{ asset('welcome/js/main.js')}}"></script> 
</body>
</html>
