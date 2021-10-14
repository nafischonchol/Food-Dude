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
        // $res_id=request()->restaurant;

       
        
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
                        <li><a href="{{ route('gallery',["$res_id"]) }}">Gallery</a></li>
                        
                       
                        <hr>
                        <div class="rest-title">
                            <p class="title-rest">{{ $restaurant->res_name }}</p>
                            <hr>
                        </div>
                        <div class="rest-desc">
                           
                            <div class="descr">
                                <br>
                                <p class="desc-k">{{ $restaurant->description }}</p>
                                <br>
                                <hr>
                                <div class="item">
                                    <ul>
                                        <li><a href="{{ route('foods',["$res_id"]) }}">Food</a></li>
                                        <li><a href="{{ route('interior',["$res_id"]) }}">Interior</a></li>
                                        <li><a href="{{ route('exterior',["$res_id"]) }}">Exterior</a></li>
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
                                                    
                                                    <option value="{{ route('showmenuitem',["$res_id","$item->category"]) }}">{{$item->category}} </option>

                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                       
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5  reserve-section">
                <div class="">
                    <div class=" section-title">
                    <P>Make a resevation</P>
                    <hr>
                </div>
               
                <form method="get" action="{{ route('findTime',["$res_id"])}}">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="res_id" value="{{ $res_id}}">
                        <div class="col-md-5">
                            <label for="start">Date</label><br>
                            <input class="date" type="date" id="start" name="date" value="{{ date('Y-m-d')}}" min="{{ date('Y-m-d') }}" max="2025-12-31">
                        </div>
                        <div class="col-md-7">
                            <div class="party-person">
                                <P>Party size</P>
                                <select name="people">
                                   
                                    @for($i=1;$i<20;$i++)
                                        <option value="{{$i}}">{{$i}} people</option>
                                    @endfor
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <button class="find-time" type="submit">Find a Time</button>
                </form>
                <br>
                
                    @isset($time)
                    <div class="button">
                        @foreach ($time as $item)
                            <a href="{{ route('completereservation',[$res_id,$item->hours])}}"><button class="btn btn-primary " type="submit">{{$item->hours}}*</button></a>

                            {{-- <a href=""><button type="submit">{{$item->hours}}*</button></a> --}}
                        @endforeach
                    </div>

                    @endisset
                    
                 

                <p class="booked-time"><i class="fa fa-book"></i> Booked {{$menus[0]->booked}} times today</p>

            </div>
            

            {{-- <div class="operation-time">
                <span>
                    <p id="h-operation"> <i class="fa fa-clock-o" aria-hidden="true"></i> Hours of operation</p>
                    <p class="item-time">{{ $restaurant->hours_of_operation }}</p>
                </span>
            </div> --}}
            <br>
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
