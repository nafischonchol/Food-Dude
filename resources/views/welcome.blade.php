<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Food Dude</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="homepage">
        <div class="reg-bar">
            @guest
                <a href="{{ URL::to('login') }}">Login</a>
                <a href="{{ URL::to('register') }}">Register</a>
            @else
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endguest
        </div>
        <div class="Tanjir">
            <h2>Welcome To FoodDude</h2>
            <h5>Select one of the option below</h5>
            <div class="part1">
                <a href="/searching_restaurant">
                    <h3>Searching for a restaurant</h3>
                </a>
            </div>
            <div class="part2">
                <a href="{{ URL::route('iamrestaurant-login') }}">
                    <h3>I am restaurant</h3>
                </a>
            </div>
            <div class="part3">
                <a href="{{ route('cookfood')}}">
                    <h3>Cook Food</h3>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
