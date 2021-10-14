@extends('searching.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/searching/style.css') }}">
  

@endsection
@section('content')

    <div class="bg-image"></div>
     
    <h1 class="nametag">
        Find your table for any occasion
        @if (session('success'))
            <span class="alert alert-warning " role="alert">
                <h3>{{ session('success') }}</h3>
            </span>
        @endif
    </h1>
    
    <div class="bg-text">
        @if (session('warning'))
            <span class="alert alert-warning d-block" role="alert">
                <h3>{{ session('warning') }}</h3>
            </span>
        @endif
        <form action="{{ route('search_restaurant') }}" class="colorchange" method="GET">
            @csrf
           
            {{-- <input type="date" class="birthday" id="birthday" name="date"> --}}

            <input  type="date" class="birthday" id="birthday" name="date" value="{{ date('Y-m-d')}}" min="{{ date('Y-m-d')}}" max="2025-12-31">

            <select id="peoplepicker" name="people">
                @for ($i = 1; $i < 20; $i++)
                    <option value="{{ $i }}">{{ $i }} People</option>
                @endfor
            </select>
            <input type="text" id="locationpicker" name="location" placeholder="Location,Restaurant">

            <button type="submit" value="Submit">Submit</button>

            </button>
        </form>
    </div>
    </div>
   
    <div id=Pmain>
        <div>
            <h3 class="popularrestaurant">Popular restaurants in Dhaka Division</h3>
        </div>
    </div>

    <hr class="pr">

    <div class="boxes">
        @forelse ($popular_restaurants as $restaurant)
            <a href="{{ route('restaurants.show', $restaurant->id) }}">
                <div class="bord-bottom">
                    <div class="menu-box ">
                        <div class="menu-image">
                            <img src="{{ asset('images/resturant/'.$restaurant->image) }}"
                                alt="">
                            <div class="menu-title">
                                <p>{{ $restaurant->title }}</p>
                            </div>
                            <div class="menu-location">
                                <p>{{ $restaurant->location }}</p>
                            </div>
                            <div class="menu-ratings">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <div>No restaurant found.</div>
        @endforelse


    </div>
    <hr class="pr">
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>About us</h2>
                <div class="content">
                    <p>FooduUde is part of Online retaurant reservation , Helps the Cookers.</p>
                    <div class="social">
                        <a href="https://www.facebook.com/Tanjir.islam.140/"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>
    
            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Garden road,West Tejturi Bazar</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+880-01925484921</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">tanjirislam7@gmail.com</span>
                    </div>
                </div>
            </div>
    
            <div class="right box">
                <h2>Contact us</h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <center>
                <span class="credit">Created By Tanjir</a> | </span>
                <span class="far fa-copyright copyright"></span><span class="rights"> 2021 All rights
                    reserved.</span>
            </center>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
    </body>
    
    </html>
@endsection


