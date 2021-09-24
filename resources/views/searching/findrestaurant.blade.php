@extends('searching.header')
@section('css')
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('css/searching/find.css') }}">

@endsection
@section('content')
    <div class="bg-image"></div>

 

    <div class="rest-available-sec">
        <div class="container">
            <div class="row">
                <div class="rest-counter">

                    <h4>{{count($restaurant)}} restaurants available</h3>

                        <select id="rated">
                            <option value="highest">Highest Rated</option>
                            <option value="newest">Newest</option>
                        </select>
                </div>
            </div>
        </div>


        @forelse ($restaurant as $rest)
            <div class="rest-display">
                {{-- rest->id --}}
                <a href=" {{ route('restaurants.show',["$rest->id"]) }} ">
                    <img height="215" width="215" src="{{ asset("images/resturant/".$rest->image) }}" alt="">
                </a>

                <div class="time-set">
                    <h3 >{{ $rest->res_name }}</h3>
                    <p >{{ $rest->location }}</p>
                    <div class="menu-ratings">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="booked">
                        <h6><b><i class="fa fa-ticket" aria-hidden="true"></i>Booked {{$rest->booked }} times today</b> </h6>

                        <h6><b><i class="fa fa-check-circle" aria-hidden="true"></i>You're in luck! We still have timeslots left</b></h6>
                    </div>

                    @php
                        $ex=explode(',',$rest->hours);
                    @endphp
                    <div class="button">
                        @foreach ($ex as $item)
                            <a href="{{ route('completereservation',[$rest->id,$item])}}"><button type="submit">{{$item}}*</button></a>
                        @endforeach
                        
                     
                    </div>
                </div>
            </div>
        @empty
            <h3>No result found.</h3>
        @endforelse
    </div>
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About Us</h6>
                    <p class="text-justify">FoodDude is part of Online retaurant reservation , Helps the Cookers.
                    </p>
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

@endsection
