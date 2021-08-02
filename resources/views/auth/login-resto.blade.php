<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('vendor/resto/css/styles-merged.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/resto/css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/resto/css/custom.css')}}">

        <style>
            body{
                background: url("{{asset('vendor/resto/img/bg-login.png')}}");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 100vh;
                /* height: 85vh; */
                overflow-y: hidden
            }
            #login-form{
                margin: 20vh 0 0 0;
                border-radius: 20px;
            }
            #login-form .login-body{
                padding: 60px;
                background: rgba(38,38,38,0.73);
                /* max-width: 582px; */
                border-radius: 20px;
                margin: 0 20% 0 20%;
            }
            .login-body form input{
                width: 100%;
                padding: 10px;
                margin: 10px;
                background: transparent;
                border: 2px solid whitesmoke;

                color: whitesmoke;
                font-weight: 500;
                font-size: 30px;
            }
            .login-body form input,.login-body form button{
                background: transparent;
                border: 2px solid whitesmoke;
                border-radius: 20px;
                font-weight: 500;
                font-size: 30px;
            }
            .login-body form button{
                padding: 10px 30px 10px 30px;
                color: whitesmoke;
            }
            .login-body form button:hover{
                background: #FFA33E;
                color: white;
                border-color: #FFA33E;
            }
            input:focus{
                outline: none;
            }
            ::placeholder {
                font-weight: 700;
                color: whitesmoke;
            }
            .text-right{
                text-align: right;
            }
            form .input-item:last-child{
                margin-top: 30px;
            }
        </style>
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
                <a class="navbar-brand" href="/" title="Doger Resto">-</a>
              </div>
      
              <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Table</a></li>
                  <li><a href="#">Menu</a></li>
                  <li><a href="https://google.com">About</a></li>
                </ul>
              </div>
            </div>
        </nav>
        <section id="login-form">
            <div class="container">
                <div class="login-header">
                    Login
                </div>
                <div class="login-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-item">
                            <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}" required autocomplete="username" autofocus>
                        </div>
                        <div class="input-item">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-item text-right">
                            <button class="" type="submit">login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script src="{{asset('vendor/resto/js/scripts.min.js')}}"></script>
        <script src="{{asset('vendor/resto/js/custom.min.js')}}"></script>
    </body>
</html>