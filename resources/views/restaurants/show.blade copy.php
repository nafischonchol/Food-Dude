{{-- {{request()->restaurant}} --}}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/resturant-show/show.css') }}">

</head>


<body>

    @php
        $res_id=request()->restaurant;
    @endphp
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
                        {{-- <div class="mainmenu">
                            <ul>
                                <li><a href="">Home</a></li>

                            </ul>
                        </div> --}}
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
        <div class="row bgc-images">
            <div class="hero-image">
                <img class="bgc" src="{{  asset('images/resturant/'.$restaurant->image) }}" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class=" col-md-7 text-center  rest-section">
                <div class="reservation-sec">
                    <div class="items">
                        <li><a href="#">Overview</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        
                        <li><a href="#reviews">Reviews</a></li>
                        <hr>
                        <div class="rest-title">
                            <p class="title-rest">{{ $restaurant->res_name }}</p>
                            <hr>
                        </div>
                        <div class="rest-desc">
                            <div class="row">
                                <div class="col-md-5  align">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="desc-p-rate">4.4</span>
                                </div>
                                <div class="col-md-5 text-right">
                                    <span class="desc-p"> <i class="fa fa-comment"></i>13 reviews</span>
                                </div>
                                
                            </div>
                            <div class="descr">
                                <br>
                                <p class="desc-k">{{ $restaurant->description }}</p>
                                <br>
                                <hr>
                                <div class="item">
                                    <ul>
                                        <li><a href="{{ route('foods',["$res_id"]) }}">Food</a></li>
                                        <li><a href="/interior">Interior</a></li>
                                        <li><a href="/exterior">Exterior</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="menu-items">
                                <hr>
                                <div class="menu">
                                    &nbsp;  <b>Menu</b>
                                    
                                    @if(isset($menus))
                                        <div class="lunch">
                                            <span><b>Lunch</b></span>
                                            <select class='select_menu'>
                                                <option>
                                                    <p> --Select Lunch--</p>
                                                </option>
                                                @php
                                                    $i=0;
                                                    $before='';
                                                @endphp
                                                @foreach ($menus as $item)
                                                    
                                                    @php
                                                        
                                                        if($i==0) 
                                                        {
                                                            $before=$item->menuType;
                                                            $i=1;
                                                            echo "<optgroup label='".$item->menuType."'>";
                                                        }
                                                        if($before!=$item->menuType)
                                                        {
                                                            echo "</optgroup>";

                                                            $before=$item->menuType;
                                                            echo "<optgroup label='".$item->menuType."'>";
                                                        }

                                                      
                                                    @endphp

                                                <option value="{{ route('showmenuitem',["$res_id","$item->category"]) }}">{{$item->category}} </option>

                                                    {{-- <option value="{{ route('showmenuitem',[1,'king']) }}">{{$item->category}} </option> --}}

                                                @endforeach
                                            </select>
                                        </div>
                              
                                        <div class="dinner">
                                            <span><b>Dinner</b></span>
                                            <select class='select_menu' >
                                                <option>
                                                    <p> --Select Dinner--</p>
                                                </option>
                                                @php
                                                    $i=0;
                                                    $before='';
                                                @endphp
                                                @foreach ($menus as $item)
                                                    @php
                                                        if($i==0) 
                                                        {
                                                            $before=$item->menuType;
                                                            $i=1;
                                                            echo "<optgroup label='".$item->menuType."'>";
                                                        }
                                                        if($before!=$item->menuType)
                                                        {
                                                            echo "</optgroup>";

                                                            $before=$item->menuType;
                                                            echo "<optgroup label='".$item->menuType."'>";
                                                        }
                                                    @endphp
                                                    {{-- <option value="{{asset('showmenuitem') }}" >{{$item->category}} </option> --}}

                                                    <option value="{{ route('showmenuitem',["$res_id","$item->category"]) }}">{{$item->category}} </option>

                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                       
                                    <br>
                                </div>
                            </div>
                        </div>

                        {{-- review section start --}}

                        <div class="review-sec">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <p class="review-title">Reviews</p><br>
                                    <p class="review-lists"> What 13 peoples are saying</p>
                                </div>
                            </div>
                        </div>
                        <div class="row each-person-review">
                            <div class="col-md-4 user-sec">
                                <div class="user-title">
                                    <p class="name-width">Tanjir islam</p>
                                </div>
                                <div class="user-image">
                                    <img src="/images/bg-3.jpg" alt="">
                                </div>

                            </div>
                            <div class="col-md-8 ratings-reviews">
                                <div class="r-ratings">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta expedita quasi
                                        sapiente.
                                        Libero doloremque recusandae illum rem sit perspiciatis. Corrupti, illum ipsam,
                                        impedit
                                        voluptas beatae minus placeat sed tenetur dignissimos consequatur laboriosam
                                        ullam hic
                                        modi inventore! Consequuntur a ut quod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row each-person-review">
                            <div class="col-md-4 user-sec">
                                <div class="user-title">
                                    <p class="name-width">Tanjir islam</p>
                                </div>
                                <div class="user-image">
                                    <img src="/images/bg-3.jpg" alt="">
                                </div>

                            </div>
                            <div class="col-md-8 ratings-reviews">
                                <div class="r-ratings">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta expedita quasi
                                        sapiente.
                                        Libero doloremque recusandae illum rem sit perspiciatis. Corrupti, illum ipsam,
                                        impedit
                                        voluptas beatae minus placeat sed tenetur dignissimos consequatur laboriosam
                                        ullam hic
                                        modi inventore! Consequuntur a ut quod.</p>
                                </div>
                            </div>
                        </div>
                   
                        previous 1 2 3 Next


                        {{-- review section end --}}



                    </div>
                </div>
            </div>

            <div class="col-md-5  reserve-section">
                <div class="">
                    <div class=" section-title">
                    <P>Make a resevation</P>
                    <hr>
                </div>
               
                <div class="row">
                    <div class="col-md-5">
                        <label for="start">Date</label><br>
                        <input class="date" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                    </div>
                    <div class="col-md-7">
                        <div class="party-person">
                            <P>Party size</P>
                            <select name="Person">
                                <option value="Select People">Select people</option>
                                 @for($i=1;$i<20;$i++)
                                    <option value="{{$i}}">{{$i}} people</option>
                                 @endfor
                            </select>
                            
                        </div>
                    </div>
                </div>
                <button class="find-time" type="submit">Find a Time</button>
                <p class="booked-time"><i class="fa fa-book"></i>Booked 12 times todday</p>

            </div>


            <div class="operation-time">
                <span>
                    <p id="h-operation"> <i class="fa fa-clock-o" aria-hidden="true"></i> Hours of operation</p>
                    <p class="item-time">{{ $restaurant->hours_of_operation }}</p>

                </span>
            </div>
            <br>
            <div class="restaurant-desc">
                <p class="item-time"><i class="fa fa-spoon" aria-hidden="true"></i> Restaurant</p>
                <p class="item-schedule"> International</p>
               
                <p class="item-time">Location</p>
                <p class="item-schedule">{{ $restaurant->location }}</p>
                <p class="item-time"><i class="fa fa-window-maximize" aria-hidden="true"></i> Website</p>
                <p class="item-schedule">{{ $restaurant->website }}</p>
                <p class="item-time"><i class="fa fa-phone"></i>Contact</p>
                <p class="item-schedule">{{ $restaurant->mobile }}</p>
                <p class="item-schedule">{{ $restaurant->email }}</p>
            </div>

        </div>
    </div>
    </div>

    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        $('.select_menu').on('change', function(){
            // alert($(this).val());

        window.location = $(this).val();
    });
</script>
</body>

</html>
