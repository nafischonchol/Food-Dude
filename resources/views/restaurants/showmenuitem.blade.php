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
    <link rel="stylesheet" href="{{ asset('css/resturant-show/showmenuitem.css') }}">

</head>


<body>

    <div class="header-absolute">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="/searching_restaurant"><img src="/images/logo/logo.png" alt=""></a>


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
                    <img class="bgc" src="{{ asset('/images/ext-1.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="menu-section">
        <div id="menu-name">
            <p>Menu: {{$menu[0]->category}}</b>
        </div>
        <div class="boxes">

            @foreach ($menu as $item)
                <a href="{{ route('eachitemmenu',[$item->res_id,$item->subCatergory]) }}">
                    <div class="menu-box ">
                        <div class="menu-image">
                            <img src="{{ asset('images/menu/'.$item->image) }}" alt="">
                            <p class="menu-title">{{$item->subCatergory}}</p>
                            <p class="menu-nutration">*{{$item->nutrition}}</p>
                            <p class="menu-price">*{{$item->price}} BDT</p>
                        </div>
                    </div>
                </a>
            @endforeach
            
        </div>

    </div>



    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
