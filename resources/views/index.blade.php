<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ashoka</title>
  <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/montserrat.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!--Logito -->
    <link rel="shortcut icon" href="img/PNGs/fav.png" type="image/png">
  <!--CSS -->
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/efects.css">
    <link rel="stylesheet" href="/css/efects2.css">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    @if (Route::has('login'))
      <div   style="display:none"class="top-right links">
        @auth
          <a href="{{ url('/home') }}">Home</a>
          @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
      </div>
    @endif

    <div class="container " style="margin-right: 0;">
      <div class="row">


          <div class="   d-none  d-xl-block  d-xl-none" style="height:0px;">
            <img src="img/PNGs/map.png" class="mr-0 w-75 " style=" float:right; height: auto;" alt="">
              </div>





        <div class="col-sm-12">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5 ">
            <ul class="list-unstyled list-inline social text-right mr-5" style="margin: 0;  ">
              <li class="list-inline-item"><a  style="text-decoration:none" href="javascript:void();"><div class="bordes"> <p  class="dona">Doná</p></div> </a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Twitter.png"  width="25"alt="twitter"></a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Google Plus.png"  width="25"alt="Flowers in Chania"></a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Facebook.png"  width="25"alt="Flowers in Chania"></a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Instagram.png"  width="25"alt="Flowers in Chania"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>




    <div class="container ">
      <div class="row">
        <div class="col-sm-1">
          <img  class="img-responsive"src='img/PNGs/ashoka_logo.png' style=" width: 110px;float:left;" ></span>
        </div>
        <div class="col-sm-11  justify-content-end ">
          <nav class="navbar navbar-expand-lg navbar-light   p-0"style="   position: absolute;right:0;bottom:0;"   >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto fondoNav " style="   position: absolute;right:0;"  >
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle menu  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       ASHOKA
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Sobre Ashoka</a>
                     <a class="dropdown-item" href="#">Historia</a>
                     <a class="dropdown-item" href="#">Equipo</a>
                     <a class="dropdown-item" href="#">Impacto</a>
                   </div>
                 </li>
                 <li class="nav-item dropdown">
                   <a class=" d-none   d-md-none  d-xl-block   nav-link dropdown-toggle menu  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RED DE EMPRENDEDORES SOCIALES
                   </a>
                   <a class="   d-block  d-sm-block  d-md-block  d-lg-block d-xl-none  nav-link dropdown-toggle menu  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RED
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Conoce la red</a>
                    <a class="dropdown-item" href="#">Emprendedores Sociales</a>
                    <a class="dropdown-item" href="#">Nominación</a>
                    <a class="dropdown-item" href="#">Comite Nominador</a>


                  </div>
                 </li>
                 <li class="nav-item dropdown">
                   <a class=" d-none   d-md-none  d-xl-block   nav-link dropdown-toggle menu  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     EDUCACION Y JUVENTUD
                   </a>
                   <a class="   d-block  d-sm-block  d-md-block  d-lg-block d-xl-none  nav-link dropdown-toggle menu  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    EDUCACION
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Que es ?</a>
                     <a class="dropdown-item" href="#">Iniciativas</a>
                   </div>
                 </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ALIANZAS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Red de apoyo(asn)</a>
              <a class="dropdown-item" href="#">Red de empresas</a>
              <a class="dropdown-item" href="#">Colaboradores</a>
            </div>
          </li>

           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle menu  text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              NOVEDADES
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Noticias</a>
               <a class="dropdown-item" href="#">Oportunidades</a>
               <a class="dropdown-item" href="#">Prensa</a>
             </div>
           </li>

           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle menu text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                COLABORA
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Dona</a>
               <a class="dropdown-item" href="#">Hazte socio</a>
               <a class="dropdown-item" href="#">Quieres ser voluntario? </a>
             </div>
           </li>

        </ul>

      </div>
    </nav>
  </div>


  </div>
  </div>


     @include('sections.content')

      @include('sections.content2')

      @include('sections.content3')

      @include('sections.footer')
      <!-- SCRIPTS  -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
