<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap");

    header {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin: 0.5rem 1.5rem;
        background-color: #222831;
        margin-left: -2px;
        height: 50px;
    }

    a,
    button {
        color: white;
    }

    .image-clickable {
        margin-right: auto;
    }

    .logo {
        height: 4.8rem;

    }

    .nav-links {
        list-style: none;
    }

    .nav-links li {
        display: inline-block;
        padding: 0 1.25rem;
    }

    .nav-links li a {
        text-decoration: none;
        font-family: "Montserrat", sans-serif;
        font-size: 1.3rem;
        transition: all 0.5s ease 0s;
    }

    .nav-links li a:hover {
        color: rgba(0, 173, 181, 0.8);
    }

    button {
        background: #04bd70;
        cursor: pointer;
        padding: 9px 20px;
        border: none;
        border-radius: 50px;
        font-family: "Montserrat", sans-serif;
        font-size: 1rem;
        transition: all 0.5s ease 0s;
        margin-left: 20px;
    }

    button:hover {
        background: rgba(0, 173, 181, 0.8);
    }

    body,
    html {
        height: 100%;
    }

    .bg-image {

        background: url("https://cdn.otstatic.com/cfe/6/images/25161502-fbb7de.jpg");
        height: 15%;
        background-size: cover;
    }

    .bg-text {
        background-color: rgb(0, 0, 0);
        color: #888;
        font-weight: bold;
        border: 3px solid #888;
        position: absolute;
        top: 16.5%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
    }

    .rest-counter {

        display: flex;
        justify-content: space-between;
        margin: auto 150px;
        padding: 10px
    }

    .rest-counter select {
        border: 1px solid blue;
        background-color: #04bd70;
        padding: 2px 10px;

    }

    .rest-display {
        width: 847px;
        display: flex;
        margin: auto 220px;
        /* border: 1px solid #888; */
        margin-bottom: 10px;

    }

    .rest-title {
        width: 200px;
        height: 220px;

    }

    .time-set {
        padding-top: -25px;
        padding: 5px;
        width: 647px;
        background-color: rgb(252, 249, 249);
        margin-left: 25px;
    }

    .rest-title img {
        height: 220px;
        width: 195px;
        border-radius: 5px;
    }

    .booked {
        display: flex;
        justify-content: space-between;
    }

    .button {
        text-align: center;
        margin: 20px 0 3px 0;
    }

    .site-footer {
        background-color: #26272b;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #737373;
    }

    .site-footer hr {
        border-top-color: #bbb;
        opacity: 0.5
    }

    .site-footer hr.small {
        margin: 20px 0
    }

    .site-footer h6 {
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px
    }

    .site-footer a {
        color: #737373;
    }

    .site-footer a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links {
        padding-left: 0;
        list-style: none
    }

    .footer-links li {
        display: block
    }

    .footer-links a {
        color: #737373
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links.inline li {
        display: inline-block
    }

    .site-footer .social-icons {
        text-align: right
    }

    .site-footer .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-left: 6px;
        margin-right: 0;
        border-radius: 100%;
        background-color: #33353d
    }

    .copyright-text {
        margin: 0
    }

    @media (max-width:991px) {
        .site-footer [class^=col-] {
            margin-bottom: 30px
        }
    }

    @media (max-width:767px) {
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text,
        .site-footer .social-icons {
            text-align: center
        }
    }

    .social-icons {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .social-icons li {
        display: inline-block;
        margin-bottom: 4px
    }

    .social-icons li.title {
        margin-right: 15px;
        text-transform: uppercase;
        color: #96a2b2;
        font-weight: 700;
        font-size: 13px
    }

    .social-icons a {
        background-color: #eceeef;
        color: #818a91;
        font-size: 16px;
        display: inline-block;
        line-height: 44px;
        width: 44px;
        height: 44px;
        text-align: center;
        margin-right: 8px;
        border-radius: 100%;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
        color: #fff;
        background-color: #29aafe
    }

    .social-icons.size-sm a {
        line-height: 34px;
        height: 34px;
        width: 34px;
        font-size: 14px
    }

    .social-icons a.facebook:hover {
        background-color: #3b5998
    }

    .social-icons a.twitter:hover {
        background-color: #00aced
    }

    .social-icons a.linkedin:hover {
        background-color: #007bb6
    }

    .social-icons a.dribbble:hover {
        background-color: #ea4c89
    }

    @media (max-width:767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }
    }

    .bg-text form,
    select,
    input {
        border: none;
        height: 25px;
        padding: 0 20px;
        border-radius: 5px;
    }
.pagination{
    margin-left: 600px;
    padding: 10px;
    color: black;
    background-color: #04bd70;
}
</style>

<body>
    <header>
        <span class="image-clickable">
            <a href="{{ url('/searching_restaurant') }}">
                <img src="/images/logo.png" class="logo" />
            </a>
        </span>
        <nav>
            <ul class="nav-links">
                <a href="{{ route('restaurants.create') }}"><i class="fa fa-search"></i> Add New</a>
                <li><a href="#">About Us</a></li>
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
    <div class="bg-image"></div>
    <div class="bg-text">
        <form action="{{ 'searchrestaurant' }}" method="GET">
            <input type="date" class="birthday" id="birthday" name="set date">
            <select id="time">
                <option value="12:00PM">12:00 PM</option>
                <option value="12:00PM">12:30 PM</option>
                <option value="12:00PM">1:00 PM</option>
                <option value="12:00PM">1:30 PM</option>
                <option value="12:00PM">2:00 PM</option>
                <option value="12:00PM">2:30 PM</option>
                <option value="12:00PM">3:00 PM</option>
                <option value="12:00PM">3:30 PM</option>
                <option value="12:00PM">4:00 PM</option>
                <option value="12:00PM">4:30 PM</option>
                <option value="12:00PM">5:00 PM</option>
                <option value="12:00PM">5:30 PM</option>
                <option value="12:00PM">6:00 PM</option>
                <option value="12:00PM">6:30 PM</option>
                <option value="12:00PM">7:00 PM</option>
                <option value="12:00PM">7:30 PM</option>
                <option value="12:00PM">8:00 PM</option>
                <option value="12:00PM">8:30 PM</option>
                <option value="12:00PM">9:00 PM</option>
                <option value="12:00PM">9:30 PM</option>
                <option value="12:00PM">10:00 PM</option>
                <option value="12:00PM">10:30 PM</option>
                <option value="12:00PM">11:00 PM</option>
            </select>
            <select id="peoples">
                <option value="1 People">1 People</option>
                <option value="2 People">2 People</option>
                <option value="3 People">3 People</option>
                <option value="4 People">4 People</option>
                <option value="5 People">5 People</option>
                <option value="6 People">6 People</option>
                <option value="7 People">7 People</option>
                <option value="8 People">8 People</option>
                <option value="9 People">9 People</option>
                <option value="10 People">10 People</option>
                <option value="11 People">11 People</option>
                <option value="12 People">12 People</option>
            </select>
            <input type="text" name="location" value="{{ request('location') }}" placeholder="Location,Restaurant">
            <button type="submit" value="Submit">Submit</button>
            </button>
        </form>
    </div>

    <div class="rest-available-sec">
        <div class="container">
            <div class="row">
                <div class="rest-counter">

                    <h4>20 restaurants available</h3>

                        <select id="rated">
                            <option value="highest">Highest Rated</option>
                            <option value="newest">Newest</option>
                        </select>
                </div>
            </div>
        </div>


        @forelse ($allrestaurants as $restaurant)
            <div class="rest-display">

                <img height="215" width="215" src="{{ asset("storage/$restaurant->image") }}" alt="">

                <div class="time-set">
                    <h3>{{ $restaurant->title }}</h3>
                    <p>{{ $restaurant->location }}</p>
                    <div class="menu-ratings">
                        <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>

                    <div class="booked">
                        <h6><b><i class="fa fa-ticket" aria-hidden="true"></i>Booked 5 times today</b> </h6>

                        <h6><b><i class="fa fa-check-circle" aria-hidden="true"></i>You're in luck! We still have 4
                                timeslots left</b></h6>
                    </div>

                    <div class="button">
                        <a href="/completereservation"><button type="submit">6:30PM*</button></a>
                        <a href="/completereservation"><button type="submit">7:30PM*</button></a>
                        <a href="/completereservation"><button type="submit">8:30PM*</button></a>
                        <a href="/completereservation"><button type="submit">9:00PM*</button></a>
                        <a href="/completereservation"><button type="submit">9:30PM*</button></a>
                    </div>

                </div>

            </div>

         @empty
            <h3>No result found.</h3>

        @endforelse

    </div>

    <div class="pagination">{{$allrestaurants->links()}}</div>



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
