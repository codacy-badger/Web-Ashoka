<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->


        <link href="//fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/estilo.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body style="background-color:#005B74 ">


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
<div class="container " style="margin-right: 0";>
<div class="row">
  <div class="col-sm-12">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5 ">
            <ul class="list-unstyled list-inline social text-right" style="margin: 0; margin-right:110px">
              <li class="list-inline-item"><a  style="text-decoration:none" href="javascript:void();"><div class="bordes"> <p  class="dona">Doná</p></div> </a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Twitter.png"  width="25"alt="twitter"></a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Google Plus.png"  width="25"alt="Flowers in Chania"></a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Facebook.png"  width="25"alt="Flowers in Chania"></a></li>
              <li class="list-inline-item"><a href="javascript:void();"> <img src="img/PNGs/Instagram.png"  width="25"alt="Flowers in Chania"></a></li>
            </ul>
            </ul>
          </div>

        </div>
  </div>
</div>


            <div class=" container"  style="  width:100%; height:auto; margin: 0 auto;">

              <div class="row">
                  <div class="col-sm-1">
                       <img  class="img-responsive"src='img/PNGs/ashoka_logo.png' style=" width: 110px;float:left;" ></span>

                  </div>


                                  <div class="col-sm-11 justify-content-end "  style="  display: flex; ">


                              <ul class="nav justify-content-end " style="line-height: 180px;">
                                <li class="nav-item ">
                                  <a class="nav-link active" href="#">ASHOKA</a>
                                </li>
                                <li class="nav-item ">
                                  <a class="nav-link" href="#">RED DE EMPRENDEDORES SOCIALES </a>
                                </li>
                                <li class="nav-item ">
                                  <a class="nav-link" href="#">EDUCACION </a>
                                </li>
                                <li class="nav-item ">
                                  <a class="nav-link  " href="#">ALIANZAS</a>
                                </li>
                                <li class="nav-item ">
                                  <a class="nav-link  " href="#">NOVEDADES</a>
                                </li>
                                <li class="nav-item ">
                                  <a class="nav-link  " href="#">COLABORA</a>
                                </li>
                              </ul>


                            </div>




              </div>




        </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
