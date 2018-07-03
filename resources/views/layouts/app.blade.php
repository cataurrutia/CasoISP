<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')    
        </main>


        <footer>
        <div class="row" style="align-items: center; display: flex; justify-content: center; margin-top:0px;">
            <div class="col-md-12" style="align-items: center; display: flex; justify-content: center; margin-top:0px;"> 
                <a href="#" class="fa fa-instagram" style="background: #f40083; color: white; padding: 10px; font-size: 30px; width: 50px; text-align: center; text-decoration: none; border-radius: 50%; margin:10px;"></a> 
                <a href="#" class="fa fa-snapchat" style="background: #fffc00; color: white; padding: 10px; font-size: 30px; width: 50px; text-align: center; text-decoration: none; border-radius: 50%; margin:10px;"></a>
                <a href="#" class="fa fa-facebook" style="background: #3B5998; color: white; padding: 10px; font-size: 30px; width: 50px; text-align: center; text-decoration: none; border-radius: 50%; margin:10px;"></a>
                <a href="#" class="fa fa-twitter" style="background: #55ACEE; color: white; padding: 10px; font-size: 30px; width: 50px; text-align: center; text-decoration: none; border-radius: 50%; margin:10px;    "></a>

            </div>        
        </div>
        <div class="row">
            <div class="col-md-12" style="align-items: center; display: flex; justify-content: center; margin-top:20px;">
                <div>
                    <a href="#" style="padding:10px; margin: 10px;">Inicio</a>
                    <a href="#" style="padding:10px; margin: 10px;">Servicio</a>
                    <a href="#" style="padding:10px; margin: 10px;">Clientes</a>
                    <a href="#" style="padding:10px; margin: 10px;">Intranet</a>
                    <a href="#" style="padding:10px; margin: 10px;">Politicas de Privacidad</a>
                </div>
            </div>
        </div>

        </footer>

    </div>
</body>
</html>
