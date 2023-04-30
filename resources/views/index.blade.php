<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


  <!-- fav -->

  <link rel="apple-touch-icon" href="{{asset('img/2.png')}}" sizes="180x180">

  <link rel="icon" href="{{asset('img/2.png')}}" sizes="32x32" type="image/png">

  <link rel="icon" href="{{asset('img/2.png')}}" sizes="16x16" type="image/png">

  <link rel="mask-icon" href="{{asset('img/2.png')}}" color="#563d7c">

  <link rel="icon" href="{{asset('img/2.png')}}">

  <!-- Lightbox -->
  <link rel="stylesheet" href="https://syntx.id/lightbox/dist/css/lightbox.min.css">


  <link href="https://fonts.googleapis.com/css?family=Syncopate:400,700|Quicksand:200,600,700|Nunito&display=swap" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link href="{{ asset('ck_editor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">

  <title>Famous Development</title>
</head>

<body>
  <style type="text/css">
  html{
    scroll-behavior: smooth;
    padding: 0;
    margin: 0;
  }
  .float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:30px;
    background-color:#25d366;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    box-shadow: 2px 2px 3px #999;
    z-index:100;
  }

  .my-float{
    margin-top:16px;
  }
  .ea{
    background: rgb(217,160,255);
    background: linear-gradient(90deg, rgba(217,160,255,1) 0%, rgba(129,216,255,1) 50%, rgba(148,241,237,1) 100%);
    width: 100%;
  }
  .bg-img{

    background-image: url('img/2.jpg');

    background-size: cover;

    width: 100%;

    height: 100vh;

    background-attachment: fixed;

  }
  .dark{

    width: 100%;

    height: 100vh;

    background-color: rgba(0,0,0,0.5);

    padding-bottom: 50px;

  }

  .center{

    position: absolute;

    left: 50%;

    top: 50%;

    transform: translate(-50%,-50%);

  }
  .carousel::-webkit-scrollbar {

    width: 2px;

    height: 5px;

  } 
  /* Track */

  .carousel::-webkit-scrollbar-track {

    background: #f1f1f1; 

  }

  

  /* Handle */

  .carousel::-webkit-scrollbar-thumb {

    background: #888; 

  }


  /* ICON */
  .item .icon-acc .eaea {
    font-size: 25px;
    position: absolute;
    top: 50%;
    left: 50%;
    color: #fff;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
  .icon-acc {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 100px;
    font-size: 14px;
    text-align: center;
    background-color: #1f2861;;
    transition: .5;
  }
  .partners #accordion .item .data h6 {
    font-size: 17px;
    line-height: 30px;
    cursor: default;
  }
  .btn-acc:hover{
    text-decoration: none;
  }
  .card-header .btn-acc .item .icon-acc{
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    transform: rotate(-90deg);
    transition: .5s;
  } 
  .card-header.active .btn-acc .item .icon-acc{
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  } 



  /* Handle on hover */

  .carousel::-webkit-scrollbar-thumb:hover {

    background: #555; 

  }

  /* Global Variables */

  :root {

    /* Tile Dimensions */

    --carousel-tile-spacing: 10px;

    --carousel-tile-width:   250px;

    --carousel-tile-height:  calc(var(--carousel-tile-width) / (16 / 12));



    /* Growth Factor */

    --carousel-growth-factor: 1.5;



    /* Fade to Opacity */

    --carousel-fade-opacity:   0.25;

    --carousel-normal-opacity: 1;



    /* Automatic Offsets - DO NOT ALTER */

    --carousel-offset-left:  calc(-1 * (var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1) / 2));

    --carousel-offset-right: calc(var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1));



    /* Transition Speeds */

    --carousel-transition-1: 1s;

    --carousel-transition-2: 0.5s;

    --carousel-transition-3: 0.3s;



  }
  .carousel-inner .img_testi{
    width: 120px;
    height: 120px;
    border-radius: 100%;
    border: 5px solid #dcdee4;
    /* padding: 5px; */
    object-fit: cover;
    position: absolute;
    left: 50%;
    top: 0;
    transform: translate(-50%, -50%);
    /* box-shadow: 0px 2px 5px #00000017; */
  }
  .quote{
      /* font-size: 3em;
      font-family: lato; */
    }
    .testimonials{
      /* background: rgb(220, 222, 228); */
      /* color: black; */
      padding-bottom: 50px;
    }
    .testi_box{
      background-color: rgb(247, 247, 247); 
      padding: 80px 50px 50px 50px; 
      margin-top: 50px;
      position: relative; 
      width: 70%;
      /* margin-left: 200px; */
      border-radius: 20px;
      box-shadow: 0px 2px 10px #00000017;
    }
    .testimonials .carousel-indicators{
      bottom: -60px;
    }


    /* Carousel Container */

    .carousel {

      margin: 0;

      box-sizing: border-box;

      width: 100%;

      overflow-x: auto;

      overflow-y: hidden;



    }



    /* Carousel Row */

    .carousel-row {

      white-space: nowrap;

      margin-top: calc((var(--carousel-tile-height) * (var(--carousel-growth-factor) - 1)) / 2);

      margin-bottom: calc((var(--carousel-tile-height) * (var(--carousel-growth-factor) - 1)) / 2);

      margin-left: calc((var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1)) / 2);

      margin-right: calc((var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1)) / 2);

      transition: var(--carousel-transition-2);

    }



    /* Content Tile */

    .carousel-tile {

      position: relative;

      display: inline-block;

      width: var(--carousel-tile-width);

      height: var(--carousel-tile-height);

      margin-right: var(--carousel-tile-spacing);

      transition: var(--carousel-transition-2);

      -webkit-transform-origin: center left;

      transform-origin: center left;

      cursor: pointer;

      cursor: hand;

    }



    /* Add Extra Margin to Last Carousel Tile */

    .carousel-tile:last-of-type {

      margin-right: calc(var(--carousel-tile-width)/2.3);

    }



    /* Ensure All Elements Inside Tile are Block */

    .carousel-tile * {

      display: block;

    }



    /* Carousel Row on Hover */

    .carousel-row:hover {

      -webkit-transform: translate3d(var(--carousel-offset-left), 0, 0);

      transform: translate3d(var(--carousel-offset-left), 0, 0);

    }



    /* Content Tile on Carousel Row Hover */

    .carousel-row:hover .carousel-tile {

      opacity: var(--carousel-fade-opacity);

    }



    /* Content Tile on Hover on Carousel Row Hover */

    .carousel-row:hover .carousel-tile:hover {

      -webkit-transform: scale(var(--carousel-growth-factor));

      transform: scale(var(--carousel-growth-factor));

      opacity: var(--carousel-normal-opacity);

    }



    /* Content Tile on Hover */

    .carousel-tile:hover ~ .carousel-tile {

      -webkit-transform: translate3d(var(--carousel-offset-right), 0, 0);

      transform: translate3d(var(--carousel-offset-right), 0, 0);

    }
    .kontak-footer h3 , .kontak-footer hr, .footer-grids ul li{
      margin-bottom: 20px;
      position: relative;
      list-style: none;
      opacity: 100;
      transform: translateY(30px);
      transition: all 0.5s ease-in-out;
    }
    .footer-grids a{
      list-style: none;
      color: #fff;

    }
    .kontak-footer h3.is-showing, .kontak-footer hr.is-showing, .footer-grids ul li.is-showing{
      opacity: 100;
      transform: translateY(0px);
    }

    .spacer{
      width: 100%;
      height: 100px;
    }

    .spacer2{
      width: 100%;
      height: 50px;
    }
    .sat{
      margin-left: 80px;
    }

    @media (max-width: 800px)
    {
      .footer-grids {
        text-align: center;
        margin-left: -50px;
      }
      .sat{
        margin-left: 15px;
      }
      .logo-footer{
        width: 75%;
        margin-left: 60px;
      }
      .ac{
        padding-left: 70px;
      }

      .aa{
        margin-top: 20px;
        margin-left: -50px;
      }
      .ee{
        margin-left: 40px;
      }
      .aw{
        margin-left: -10px;
        min-width: 80%;
      }
      .eee{
        margin-bottom: 20px;
      }
      .aaa{
        margin-left: -10px;
      }
    }
    .ee{
      width: 60%;
    }
    .aw{
      width: 50%;
    }

    .eee{
      width: 90%;
    }

    .lan{
      animation-duration: 2s;
      animation-iteration-count: infinite;
    }
    .alink-team:hover{
      text-decoration: none;
      border: none;
    }
  </style>


  @if (session('alert'))
  <script>    
    alert("{{ session('alert') }}")
  </script>
  @endif


  <!-- Navbar -->
  <section id="nav">
    <nav class="navbar bg-white navbar-expand-md navbar-light shadow-sm fixed-top col">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ '/img/famous_development3.png' }}" style="width: 100px;">
          <!-- {{ config('tess', 'RFN Dev') }} -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto ">

            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a href="/" class="@if(Request::is('/','/*')) active @endif nav-link">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="/berita" class="@if(Request::is('berita','berita*')) active @endif nav-link">Berita</a>
            </li>
            <li class="nav-item">
              <a href="/galeri" class="@if(Request::is('galeri','galeri*')) active @endif nav-link">Galeri</a>
            </li>
            <li class="nav-item">
              <a href="/vidio" class="@if(Request::is('vidio','vidio*')) active @endif nav-link">Vidio</a>
            </li>
            <li class="nav-item">
              <a href="/tentang_kami" class="@if(Request::is('tentang_kami','tentang_kami*')) active @endif nav-link">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a href="/kontak" class="@if(Request::is('kontak','kontak*')) active @endif nav-link">Hubungi Kami</a>
            </li>
            @if (Route::has('register'))
            <!--  -->
            @endif
            @else
            <li class="nav-item">
              <a href="/" class="@if(Request::is('/','/*')) active @endif nav-link">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="/berita" class="@if(Request::is('berita','berita*')) active @endif nav-link">Berita</a>
            </li>
            <li class="nav-item">
              <a href="/galeri" class="@if(Request::is('galeri','galeri*')) active @endif nav-link">Galeri</a>
            </li>
            <li class="nav-item">
              <a href="/vidio" class="@if(Request::is('vidio','vidio*')) active @endif nav-link">Vidio</a>
            </li>
            <li class="nav-item">
              <a href="/tentang_kami" class="@if(Request::is('tentang_kami','tentang_kami*')) active @endif nav-link">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a href="/kontak" class="@if(Request::is('kontak','kontak*')) active @endif nav-link">Hubungi Kami</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="/admin/dashboard" class="dropdown-item">Dashboard</a>

                <hr>

                <a href="/admin/list_berita" class="dropdown-item">Manage Berita</a>

                <a href="/admin/list_foto" class="dropdown-item">Manage Galeri</a>

                <a href="/admin/list_pelanggan" class="dropdown-item">Manage Pelanggan</a>

                <a href="/admin/list_vidio" class="dropdown-item">Manage Vidio</a>

                <a href="/admin/list_testi" class="dropdown-item">Manage Testimoni</a>

                <a href="/admin/list_sarkom" class="dropdown-item">Manage Saran & Komentar</a>

                <hr>

                <a href="/admin/edit_tentangkami/1" class="dropdown-item">Ubah Tentang Kami</a>

                <a href="/admin/list_kontak" class="dropdown-item">Manage Kontak</a>

                <a href="/admin/list_sosmed" class="dropdown-item">Manage Sosial Media</a>


                <hr>

                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Keluar') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
</section>
<!-- Header -->
<section id="header">

  <div class="bg-img animated fadeIn">

    <div class="dark">

      <center>

        <div class="center">
          <!-- <h1></h1> -->

          <!-- <h1 class="animated bounceInDown" style="color: white; font-size: 500%;">FAMOUS Development</h1> -->
          <!-- <h1 class="animated bounceInDown" style="color: white; ">Development</h1> -->
          <img class="aw animated bounceInDown" src="{{'/img/famous_development2.png'}}" ><br>
          <!-- <small>Development</small> -->
          <h4 class="animated bounceInUp" style="color: white;">Development</h4>

          <div class="container text-center">
            <a href="#tentang_kami" class="animated rotateIn btn btn-primary" style="border-radius: 100px; width: 150px;">Get Started</a>
          </div>
          <div style="top: 50vh; position: absolute;" class="container text-center">

            <a style="color: white;" class="page-scroll" href="#tentang_kami"><i class="fa-2x fas lan bounce animated fa-chevron-down"></i></a>

          </div>

        </div>

      </center>

    </div>

  </div>
</section>


<!-- Tentang Kami -->
<section id="tentang_kami" width="100%">
  <div class="spacer2"></div>
  <div class="container ac">
    <div class="row justify-content-center" style="margin: 30px;">
      <div class="col col-md-6 col-sm-12 col-12 ">
        <img class="ee" src="{{'img/2.png'}}">
      </div>

      @foreach($kami as $data)
      <div class="col col-md-6 col-sm-12 col-12  aa">
        <h3 class="text-center">Tentang Kami</h3>
        <div class="card shadow-lg " style="border-radius: 25px; padding: 15px;">
          <p >{!!$data->tentang_kami!!}</p>
          <a href="/tentang_kami" class="">Baca Selengkapnya...</a>
        </div>
      </div>  
      @endforeach


    </div>
  </div>
  <div class="spacer2"></div>
</section>


<!-- Testimoni -->
<section id="testimonial" width="100%" class="testimonials" style="background-color: #ddd;">
  <div class="spacer2"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-sm-12 mb-4">

          <h3 class="text-center text-uppercase">Testimonial Klien</h3>

          <hr style="width: 50px; border: 2px solid #1f2861;">

        </div>
        <!-- <div class="col-lg-12 text-center"> -->
          <!-- <span style="font-size: 1.6em;"> -->
            <!-- Testimonial Klien -->
            <!-- </span> -->
            <!-- <br> -->
            <!-- <hr style="width: 50px; border: 1px solid blue;"> -->
            <!-- <div class="spacer" style="height: 40px;"></div> -->
            <!-- </div> -->
            <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
              <br>
              <ol class="carousel-indicators">
                <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
              </ol>

              <div class="carousel-inner text-center">
                @foreach($testi as $key => $data)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}" style="padding: 10px; transition: all .3s ease;">
                  <center>
                    <div class="testi_box">
                      <img src="{{ url('/file_testi/'.$data->foto_testi) }}" alt="images" class="img_testi">
                      <h4>{{$data->nama_testi}}</h4>
                      <small style="display: block;">{{$data->pekerjaan_testi}}</small>
                      <hr style="width: 50px;">
                      <!-- <img src="images/quote.png" alt="image" class="quote"> -->
                      {!!$data->isi_testi!!}
                    </div>
                  </center>
                </div>
                @endforeach
                <a class="carousel-control-prev" href="#carousel-testimonials" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-testimonials" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer2"></div>
      </section>


      <!-- Galeri -->

      <section id="galeri" width="100%">

        <div class="container">

          <div class="row justify-content-center">

            <div class="col-sm-12 mb-4" style="margin-top: 80px;">

              <h3 class="text-center text-uppercase">Galeri</h3>

              <hr style="width: 50px; border: 2px solid #1f2861;">

            </div>


            <div class="carousel">

              <div class="carousel-row">
                @foreach($gal as $data)
                <div class="carousel-tile"><a href="{{ url('/file_galeri/'.$data->file_foto) }}" data-title="{{ $data->nama_foto}}" data-lightbox="Laptop1"><img src="{{ url('/file_galeri/'.$data->file_foto) }}" style="width: 90%;" ></a></div>
                @endforeach
              </div>

            </div>

          </div>

          <br><br>

        </div>    

      </section>



      <!-- Langganan -->
      <section id="pelanggan" width="100%" style="background-color: #ddd;">
        <div class="spacer2"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col col-md-6 col-sm-12 col-12 text-center">
              <img class="eee aww" src="{{'img/famous_development3.png'}}">
            </div>

            <div class="col col-md-6 col-sm-12 col-12 text-center">
              <form action="/pelanggan" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <p>Dapatkan Informasi Artikel Terbaru dari Kami. Lebih dari 1.000+ Orang Berlangganan.</p>
                <input type="text" name="nama" class="form-control" required="required" placeholder="Masukkan Nama Anda"><br>
                <input type="email" name="email" class="form-control" required="required" placeholder="Masukkan Email Anda"><br>
                <input type="submit" name="submit" value="Berlangganan" class="btn btn-block btn-primary">
              </form>
            </div>
          </div>
        </div>
        <div class="spacer2"></div>
      </section>


      <?php $kontak = DB::table('kontak')->get() ?>

      @foreach($kontak as $data)
      <a href="https://api.whatsapp.com/send?phone=62{{$data->wa_kon}}&text=Halo! saya ingin menggunakan jasa Famous Development untuk website saya." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
      </a>
      @endforeach



      <!-- Footer -->

      <section class="footer " style="background-color: #4D4D4D; color: #fff">
        <div class="container ">
          <div class="row">
            <div class="col col-12 col-md-3 text-center">
              <div class="logo-footer mt-5">

                <img src="{{'/img/41.png'}}" alt="" class="img-fluid aaa" width="80%">
              </div>
            </div>
            <div class="col col-12 col-md-3 mt-5 footer-sect">
              <div class="kontak-footer">
                <h3 class="section-text-footer text-center">Kontak Kami</h3>
                <hr style="border: 1px solid #323232" width="100px"> 
                <div class="footer-grids">
                  <ul >
                    <li>
                      <?php 

                      $kontak = DB::table('kontak')->get();

                      ?>
                      @foreach($kontak as $data)
                      <p><i class="fas fa-phone-alt" style="font-size: 20px;"></i>
                        +62{{$data -> tel_kon}} <br>
                      </p>
                      <p><a href="https://api.whatsapp.com/send?phone=62{{$data->wa_kon}}&text=Halo! saya ingin menggunakan jasa Famous Development untuk website saya." target="_blank"><i class="fab fa-whatsapp" style="font-size: 20px;"></i> +62{{$data->wa_kon}}</a></p>
                      @endforeach
                    </li>
                  </ul>

                </div>
              </div>

            </div>
            <div class="col col-12 col-md-3 mt-5 footer-sect">
              <div class="kontak-footer">
                <h3 class="section-text-footer text-center">Sosial Media</h3>
                <hr style="border: 1px solid #323232" width="100px">
                <div class="footer-grids">
                  <ul>
                    <?php $sosmed = DB::table('sosmed')->get() ?>

                    @foreach($sosmed as $data)
                    <li>
                      <p><i class="fab fa-instagram" style="font-size: 25px;"></i>
                        <a href="{{$data->instagram_sosmed}}" target="_blank" class="alink-team">Instagram</a></p>
                      </li>
                      <li>
                        <p><i class="fab fa-facebook" style="font-size: 25px;"></i>
                          <a href="{{$data->fb_sosmed}}" class="alink-team">Facebook</a></p>
                        </li>
                        <li>
                          <p><i class="fab fa-twitter" style="font-size: 25px;"></i>
                            <a href="{{$data->twit_sosmed}}" class="alink-team">Twitter</a></p>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col col-12 col-md-3 mt-5 footer-sect">
                    <div class="kontak-footer">
                      <h3 class="section-text-footer text-center">Back To The Top</h3>
                      <hr style="border: 1px solid #323232" width="150px"> 
                      <div class="footer-grids">
                        <ul>
                          <li class="">
                            <a href="#header"  class="sat alink-team"><i class="fa fa-arrow-up"></i></a></p>

                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div style="height: 50px; width: 100%"></div>


                </div>
              </div>
            </section>

            <section id="footer">
              <footer class="bg-dark text-light text-center" style=" padding: 15px; margin: 0;">
                <p>&copy; 2020 Famous Development. | All rights reserved.</p>
              </footer>
            </section>

            <!-- Lightbox -->
            <script src="https://syntx.id/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
            <script src="{{asset('js/carousel.js')}}"></script>    

            <script src="{{ asset('ck_editor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
            <script>hljs.initHighlightingOnLoad();</script>

            <script src="https://kit.fontawesome.com/78d1706a73.js"></script>
            <!-- <script src="https://fontawesome.com/js/all.js"></script> -->


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </body>
          </html>