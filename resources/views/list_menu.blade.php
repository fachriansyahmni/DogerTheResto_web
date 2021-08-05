<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu</title>
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
              <li style="background-image: url('{{asset('vendor/resto/img/hero2.png')}}')" class="overlay" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                        <h3 class="secondary-heading">MENU</h3>
                        {{-- <p class="sub-heading">A truly delicious taste of foods</p> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </section>
          <br><br><br>
           <section class="probootstrap-section">
            <div class="container">
              <div class="row">
                <div class="probootstrap-cell-retro">
                  @foreach (App\Menu::where("visible",1)->take(20)->get() as $index => $menu)
                  @if ($index < 10)
                  <div class="half">
                    @if ($index % 1 == 0)
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