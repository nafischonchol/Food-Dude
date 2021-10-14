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
    <link rel="stylesheet" href="{{ asset('css/recipes/details.css') }}">
</head>


<body>
    <div class="heading-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center heading-title">
                    <a href="/cookfood">FoodDude</a>

                </div>

                <div class="col-md-9 text-right">
                    <div class="aside-option">

                        <a href="{{ route('all-recipe') }}">Recipes</a>
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

    @isset($data)
        @foreach ($data as $item)
            <div class='recipe-card'>
                <div
                    style="background:url({{asset('images/recipes/'.$item->image) }}) no-repeat 50% 50%; background-size:cover; height: 300px">
                </div>

                <div class="duration">
                  Duration: {{$item->duration." "}} 
                </div>
                <div class="recipe-card__body">
                    <h1 class="recipe-card__heading">{{$item->title}}</h1>


                    <h2 class="recipe-card__subhead">
                        <p class="text-danger">{{$item->author}} </p>
                    </h2>
                    <h2 class="recipe-card__subhead">{{$item->description}} </h2>
                    <ul class="recipe-card__nav">
                        <h3 class="active">Methods</h3>
                        <ul class="recipe-card__methods">
                           {{$item->method}}
                        </ul>
                    </ul>
                </div>

                {{-- <h3 class="ing">Ingredients</h3> --}}
                
                  <div class="recipe-card-body">
                    <ul class="recipe-card__nav">
                      <h3 class="ing">Ingredients</h3>
                      <ul class="recipe-card__methods">
                        {{$item->ingre}}
                      </ul>
                    </ul>
                  </div>
                 
                
            </div>
           

          
        @endforeach
    @endisset


    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
