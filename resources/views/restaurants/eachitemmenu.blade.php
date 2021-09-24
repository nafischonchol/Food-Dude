<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Dude</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/resturant-show/eachitemmenu.css') }}">

</head>


<body>

    <div class="header-absolute">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="/searching_restaurant"><img src="/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        
                    </div>

                    <div class="col-md-3 text-right forpadding">
                        <div class="registration">
                            @guest
                                <a class="signin" href="{{ route('login') }}"><i class="fa fa-user"></i> SIGN
                                    IN</a>
                                <a class="signup" href="{{ route('register') }}"><i class="fa fa-user "></i>
                                    SIGN UP</a>
                            @else
                                <div class="logout" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="hero-area">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-image">
                    <img class="bgc" src="/images/ext-1.jpg">

                </div>
            </div>
        </div>
    </div>
    @if(isset($eachItem[0]))
        <div class="menu-section">
            <div id="menu-name">
                <p>Item: {{ $eachItem[0]->menuType}}</b>
            </div>
            <div class="row">
                <div class="col-md-6  col-md-offset-3">
                    <div class="boxes">
                        <div class="menu-image">
                            
                            <img src="{{ asset('images/menu/'.$eachItem[0]->image) }}">
                        </div>
                        <div class="titles">
                            <p class="menu-title">{{ $eachItem[0]->subCatergory}}</p>
                            <p class="menu-nutration">{{$eachItem[0]->nutrition}}</p>
                            <p class="menu-price">*{{$eachItem[0]->price}} BDT</p>
                        </div>
                        <div class="information">
                            <p><b>Description</b></p><br>

                            <p>{{ $eachItem[0]->description }}</p>
                        </div>
                        <hr>
                        <div class="information">
                            <p><b>Ingredients</b></p><br>

                            <p>{{ $eachItem[0]->ingredients }}</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
