<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <meta name="description" content="Free Bootstrap Theme by uicookies.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('vendor/resto/css/styles-merged.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/resto/css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/resto/css/custom.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" title="uiCookies:FineOak">FineOak</a>
              </div>
      
              <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#" data-nav-section="welcome">Welcome</a></li>
                  <li><a href="#" data-nav-section="table">Table</a></li>
                  <li><a href="#" data-nav-section="menu">Menu</a></li>
                  <li><a href="#" data-nav-section="about">About</a></li>
                  <li><a onclick="location.href = '{{route('login')}}';" href="#">Login</a></li>
                </ul>
              </div>
            </div>
        </nav>
      
          <section class="flexslider" data-section="welcome">
            <ul class="slides">
              <li style="background-image: url('{{asset('vendor/resto/img/hero_bg_1.png')}}')" class="overlay" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                        <h1 class="primary-heading">Welcome</h1>
                        <h3 class="secondary-heading">THE UNIKOM RESTO'S</h3>
                        {{-- <p class="sub-heading">A truly delicious taste of foods</p> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li style="background-image: url('{{asset('vendor/resto/img/hero_bg_1.png')}}')" class="overlay">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                        <h1 class="primary-heading">A truly delicious taste of foods</h1>
                        {{-- <h3 class="secondary-heading">With Us</h3>
                        <p class="sub-heading">A free bootstrap website template by <a href="https://uicookies.com">uicookies.com</a></p> --}}
                      </div>
                    </div>
                  </div>
                </div>
                
              </li>
            </ul>
          </section>
      
          <section class="probootstrap-section probootstrap-bg-white">
            <div class="container">
              <div class="row">
                <div class="col-md-5 text-center probootstrap-animate">
                  <div class="probootstrap-heading dark">
                    <h1 class="primary-heading">Discover</h1>
                    <h3 class="secondary-heading">Our Store</h3>
                    {{-- <span class="seperator">* * *</span> --}}
                  </div>
                  <div class="d-flex justify-content-around">
                    <div class="d-flex flex-column">
                      <span>Senin - Jumat</span>
                      <strong>10:00 - 22:00</strong>
                    </div>
                    <div class="d-flex flex-column">
                      <span>Sabtu - Minggu</span>
                      <strong>10:00 - 20:00</strong>
                    </div>
                  </div>
                  {{-- <p><a href="#" class="probootstrap-custom-link">About Us</a></p> --}}
                </div>
                <div class="col-md-6 col-md-push-1 probootstrap-animate">
                  <p><img src="{{asset('vendor/resto/img/resto1.png')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></p>
                </div>
              </div>
              <!-- END row -->
            </div>
          </section>
      
          <section class="probootstrap-section-bg overlay" style="background-image: url({{asset('vendor/resto/img/hero2.png')}})" data-stellar-background-ratio="0.5" data-section="menu">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center probootstrap-animate">
                  <div class="probootstrap-heading">
                    <h2 class="primary-heading">Our</h2>
                    <h3 class="secondary-heading">FAVORITE MENU</h3>
                  </div>
                </div>
              </div>
            </div>
          </section>
           <!-- probootstrap-bg-white -->
          <section class="probootstrap-section">
            <div class="container">
              <div class="row">
                <div class="probootstrap-cell-retro">
                  @foreach (App\Menu::where("visible",1)->take(10)->get() as $index => $menu)
                  @if ($index < 5)
                  <div class="half">
                    @if ($index % 2 == 0)
                        <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                          <div class="image" style="background-image: url({{asset($menu->gambar)}});"></div>
                          <div class="text text-center">
                            <h3>{{$menu->nama}}</h3>
                            <p class="price">{{$menu->harga}}</p>
                          </div>
                        </div>
                        @else
                        <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                          <div class="image" style="background-image: url({{asset($menu->gambar)}});"></div>
                          <div class="text text-center">
                            <h3>{{$menu->nama}}</h3>
                            <p class="price">{{$menu->harga}}</p>
                          </div>
                        </div>
                        @endif
                  </div>
                  @else
                  <div class="half">
                    @if ($index % 2 == 0)
                        <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                          <div class="image" style="background-image: url({{asset($menu->gambar)}});"></div>
                          <div class="text text-center">
                            <h3>{{$menu->nama}}</h3>
                            <p class="price">{{$menu->harga}}</p>
                          </div>
                        </div>
                        @else
                        <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                          <div class="image" style="background-image: url({{asset($menu->gambar)}});"></div>
                          <div class="text text-center">
                            <h3>{{$menu->nama}}</h3>
                            <p class="price">{{$menu->harga}}</p>
                          </div>
                        </div>
                        @endif
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
              <div class="ahowallmenu"><a href="/menu">Lihat Semua</a></div>

            </div>
          </section>
      
          <section class="probootstrap-section-bg overlay" style="background-image: url({{asset('vendor/resto/img/hero3.png')}});"  data-stellar-background-ratio="0.5"  data-section="table">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center probootstrap-animate">
                  <div class="probootstrap-heading">
                    <h2 class="primary-heading">Available</h2>
                    <h3 class="secondary-heading">TABLES</h3>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <section class="probootstrap-section probootstrap-bg-white">
            <div class="container">
              <div class="row" style="text-align: -webkit-center;">
                @foreach (App\Meja::get() as $meja)
                <div class="col-md-3 col-xs-3">
                  <div class="tblPlace">
                    <img src="{{asset('vendor/resto/img/table.svg')}}" alt="">
                    <span>{{$meja->nomor_meja}}</span>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section>
          
          <section class="probootstrap-footer" data-section="about">
            <div class="container">
              <div class="" style="text-align: center; margin-bottom: 20px">
                <h2><strong>LOCATION</strong></h2>
              </div>
              <div class="row">
                <div class="col-md-6 probootstrap-animate">
                  <div class="probootstrap-footer-widget">
                    <p>
                      Jalan Dipatiukur No. 112-116,<br>
                      Coblong, Lebakgede, Bandung,<br>
                      Kota Bandung,<br>
                      Jawa Barat 40132 <br>
                      <br><br>
                      Telepon	022-2504119 <br>
                      Fax	022-2533754
                    </p>
                  </div>
                </div>
                <div class="col-md-6 probootstrap-animate">
                  <div class="probootstrap-footer-widget">
                   <img src="{{asset('vendor/resto/img/map.png')}}" width="762px" alt="">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="probootstrap-copyright">
            <div class="container">
              <div class="row">
                <div class="col-md-12" style="text-align: center">
                  <strong class="copyright-text">created by DOGER TEAM</strong>
                </div>
              </div>
            </div>
          </section>
      
          <script src="{{asset('vendor/resto/js/scripts.min.js')}}"></script>
          <script src="{{asset('vendor/resto/js/custom.min.js')}}"></script>
    </body>
</html>
