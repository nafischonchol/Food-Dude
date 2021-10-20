<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodDude</title>

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            overflow-x: hidden;
            margin-left:2px;
        }

    </style>
</head>

<body>
    <div class="heading-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center heading-title">
                    <a href="/cookfood">FoodDude</a>

                </div>
                <div class="col-3">

                </div>
                <div class="col-md-6 text-right">
                    <div class="aside-option">
                     
                        <a href="{{ route('all-recipe') }}">Recipes</a>
                        <a href="{{ route('list-save-recipes') }}">Save Recipes</a>

                        <a href="{{ route('recipes.create') }}"> Add New</a>
                        @guest
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i> SIGN IN</a>
                            <a href="{{ route('register') }}"><i class="fa fa-user"></i> SIGN UP</a>
                        @else

                            <a class="text-warning"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-area">

        <div class="hero-image">
            <img src="https://burst.shopifycdn.com/photos/breakfast-from-above.jpg?width=1200&format=pjpg&exif=0&iptc=0"
                alt="">

        </div>
    </div>

 
            <div class="Newest-section">
                <div class="container">
                    <div class="row no-gutters py-5">
                        <div class="col-md-10 text-left T-recipes">
                            <a href="#">Newest Recepies</a>
                        </div>

                        <div class="col-md-2 text-right T-view">
                            <a href="{{ route('all-recipe') }}">View All<i id="arrow" class="fa fa-arrow-right"></i></a>
                        </div>
                        @if(session('success'))
                            <span class="alert alert-danger d-block mt-3">{{session('success')}}</span>
                        @endif
                    </div>

                    <div class="row bord-bottom" style="justify-content: space-between;">
                        
                        @if(isset($data) && !empty($data))
                            @foreach ($data as $item)
                                <div class="col-md-2 menu-box ">
                                    <a href="{{ route('recipe-details',[$item->id]) }}" class="text-decoration-none">
                                        <div class="menu-image">
                                            <img src="{{asset('images/recipes/'.$item->image) }}" alt="">
                                            <div class="menu-title">
                                                <p>{{$item->title}}</p>
                                            </div>
                                            <div class="menu-author">
                                                <p>{{$item->author}}</p>
                                            </div>
                                        
                                        </div>
                                    </a>
                                </div>
                               
                            @endforeach
                        @endif
                        
                    </div>

                </div>
            </div>
            
        {{-- search section --}}
       
      <div class="container">
        <div class="row">
            <div class="gredient-image">
                <div class="search-bar">
                    <form action="{{ route('search-recipe') }}" method="POST">
                        @csrf
                        <h2>Make recipe by your own ingredients</h2>
                        <input type="text" name="query"  id="query" placeholder="Chicken,Potato,Onion">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></a></button>
                    </form>
                </div>
            </div>
        </div>
      </div>
           
        
            

            <!-- Site footer -->
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h6>About Us</h6>
                            <p class="text-justify">FoodDude is part of Online retaurant reservation , Helps the
                                Cookers.</p>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <h6>Categories</h6>
                            <ul class="footer-links">
                                <li><a href="#">Trending recipes</a></li>
                                <li><a href="#">Newest recipes</a></li>
                                <li><a href="#">Key Ingredients</a></li>
                            </ul>
                        </div>

                        <div class="col-xs-6 col-md-3">
                            <h6>Quick Links</h6>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contribute</a></li>
                                <li><a href="#">Privacy Policy</a></li>

                            </ul>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                                <a href="#">Tanjir islam</a>.
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>


            <script src="jquery.min.js"></script>
            <script src="owlcarousel/owl.carousel.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
