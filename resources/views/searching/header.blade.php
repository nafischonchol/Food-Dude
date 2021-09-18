<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodDude</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    @yield('css')
</head>


<body>
    <header>
        <span class="image-clickable">
            <a href="{{ route('/') }}">
                <img src="{{ asset('images/logo/logo.png') }}" class="logo" />
            </a>
        </span>
        <nav>
            <ul class="nav-links">
                
                @guest
                    <li><a href="{{ route('login') }}">SIGN IN</a></li>
                    <li><a href="{{ route('register') }}">SIGN UP</a></li>
                @else
                    <div class="dropdown-menu dropdown-menu-right logout" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </ul>
        </nav>
       
    </header>
    @yield('content')


     <!-- Site footer -->


<!-- footer end -->