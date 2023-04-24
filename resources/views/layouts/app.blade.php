<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/advertisment.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <div style="text-align:center; width:100%; position:fixed; z-index:99">
    
        <nav style=" " class="navbar navbar-expand-md  shadow-sm navbar-dark bg-dark" >
            <div class="container" >
                <a class="navbar-brand" href="/advertisment">
                {{__('mylang.advertisment')}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="/business"></a>{{__('mylang.business')}}</li>
                        <li class="nav-item"><a class="nav-link" href="/category">{{__('mylang.category')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="/customer">{{__('mylang.customer')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="/feedback">{{__('mylang.feedback')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="/order">{{__('mylang.order')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="/partner">{{__('mylang.partner')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="/product">{{__('mylang.product')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="/style">{{__('mylang.style')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="/lang/vn"><img src="/vn.png" style="width:50px; aspect-ratio:5/3" alt=""></a></li>
                        <li class="nav-item"><a class="nav-link" href="/lang/en"><img src="/en.png" style="width:50px; aspect-ratio:5/3" alt=""></a></li>
                
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('mylang.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('mylang.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('mylang.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        </div>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
