<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodDude</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    /> -->
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap");

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        background-color: #222831;
    }

    header {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin: 0.5rem 1.5rem;
    }

    a,
    button {
        color: white;
    }

    .image-clickable {
        margin-right: auto;
    }

    .logo {
        height: 3.2rem;
        margin-right: auto;
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
        font-size: 1rem;
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

    * {
        box-sizing: border-box;
    }

    .bg-image {
        /* The image used */

        background: url("https://cdn.otstatic.com/cfe/6/images/25161502-fbb7de.jpg");
        background-repeat: no-repeat;
        background-size: 200px 60px;


        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(4px);

        /* Full height */
        height: 60%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Position text in the middle of the page/image */
    .bg-text {
        /* background-color: rgb(0, 0, 0); */
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
    }

    .nametag {
        position: absolute;
        color: white;
        font-weight: bold;
        top: 20%;
        left: 28%;
        background: transparent;
    }

    .tomorrrowlunch {
        padding-top: 35px;
        padding-left: 15px;
        color: white;
        font-weight: bold;
        font-size: 90%;
    }

    .hr {
        margin-left: 15px;
        margin-top: 32px;
    }

    #main {
        display: flex;


    }

    .view {
        padding-top: 38px;
        padding-left: 1000px;
        font-size: 90%;

    }


    .popularrestaurant {
        padding-top: 35px;
        padding-left: 15px;
        color: white;
        font-weight: bold;
        font-size: 90%;
    }

    .pr {
        margin-left: 15px;
        margin-top: 32px;
    }

    #Pmain {
        display: flex;


    }

    .viewP {
        padding-top: 38px;
        padding-left: 827px;
        font-size: 90%;

    }

    /* *sud */
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        color: #d9d9d9;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }


    footer {

        bottom: 0px;
        width: 100%;
        background: #111;


        clear: both;
        position: relative;

    }

    .main-content {
        display: flex;
    }

    .main-content .box {
        flex-basis: 50%;
        padding: 10px 20px;
    }

    .box h2 {
        font-size: 1.125rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .box .content {
        margin: 20px 0 0 0;
        position: relative;
    }

    .box .content:before {
        position: absolute;
        content: '';
        top: -10px;
        height: 2px;
        width: 100%;
        background: #1a1a1a;
    }

    .box .content:after {
        position: absolute;
        content: '';
        height: 2px;
        width: 15%;
        background: #f12020;
        top: -10px;
    }

    .left .content p {
        text-align: justify;
    }

    .left .content .social {
        margin: 20px 0 0 0;
    }

    .left .content .social a {
        padding: 0 2px;
    }

    .left .content .social a span {
        height: 40px;
        width: 40px;
        background: #1a1a1a;
        line-height: 40px;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .left .content .social a span:hover {
        background: #f12020;
    }

    .center .content .fas {
        font-size: 1.4375rem;
        background: #1a1a1a;
        height: 45px;
        width: 45px;
        line-height: 45px;
        text-align: center;
        border-radius: 50%;
        transition: 0.3s;
        cursor: pointer;
    }

    .center .content .fas:hover {
        background: #f12020;
    }

    .center .content .text {
        font-size: 1.0625rem;
        font-weight: 500;
        padding-left: 10px;
    }

    .center .content .phone {
        margin: 15px 0;
    }

    .right form .text {
        font-size: 1.0625rem;
        margin-bottom: 2px;
        color: #656565;
    }

    .right form .msg {
        margin-top: 10px;
    }

    .right form input,
    .right form textarea {
        width: 100%;
        font-size: 1.0625rem;
        background: #151515;
        padding-left: 10px;
        border: 1px solid #222222;
    }

    .right form input:focus,
    .right form textarea:focus {
        outline-color: #3498db;
    }

    .right form input {
        height: 35px;
    }

    .right form .btn {
        margin-top: 10px;
    }

    .right form .btn button {
        height: 40px;
        width: 100%;
        border: none;
        outline: none;
        background: #f12020;
        font-size: 1.0625rem;
        font-weight: 500;
        cursor: pointer;
        transition: .3s;
        margin-left: 2px;
    }

    .right form .btn button:hover {
        background: #000;
    }

    .bottom center {
        padding: 5px;
        font-size: 0.9375rem;
        background: #151515;
    }

    .bottom center span {
        color: #656565;
    }

    .bottom center a {
        color: #f12020;
        text-decoration: none;
    }

    .bottom center a:hover {
        text-decoration: underline;
    }

    @media screen and (max-width: 900px) {
        footer {
            position: relative;
            bottom: 0px;
        }

        .main-content {
            flex-wrap: wrap;
            flex-direction: column;
        }

        .main-content .box {
            margin: 5px 0;
        }
    }

    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 8px 18px;

        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;

    }

    /*
hh */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1.5em;
    }

    .menu {
        font-family: "Inter", sans-serif;
        font-size: 14px;
    }

    .menu-group-heading {
        margin: 0;
        padding-bottom: 1em;
        border-bottom: 2px solid #ccc;
    }

    .menu-group {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5em;
        padding: 1.5em 0;
    }

    .menu-item {
        display: flex;
    }

    .menu-item-image {
        width: 80px;
        height: 80px;
        flex-shrink: 0;
        object-fit: cover;
        margin-right: 1.5em;
    }

    .menu-item-text {
        flex-grow: 1;
    }

    .menu-item-heading {
        display: flex;
        justify-content: space-between;
        margin: 0;
    }

    .menu-item-name {
        margin-right: 1.5em;
    }

    .menu-item-description {
        line-height: 1.6;
    }

    @media screen and (min-width: 992px) {
        .menu {
            font-size: 16px;
        }

        .menu-group {
            grid-template-columns: repeat(2, 1fr);
        }

        .menu-item-image {
            width: 125px;
            height: 125px;
        }
    }

    .review-no {
        position: relative;
        top: 2px;
        font-size: medium;
        padding-left: 25px;

    }

    /* hh */

    .boxes {
        width: 1250px;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto;
        margin-left: 20px;
        margin-top: 20px;
        margin-bottom: -10px;
    }

    .menu-title p {
        width: 220px;
        color: #888;
        text-align: center;
        font-size: 14px;
        height: 60px;
        font-family: Verdana;
        font-weight: bold;
        margin-top: 5px;
    }

    .menu-location p {
        width: 220px;
        color: #888;
        text-align: center;
        font-size: 12px;
        padding: 10px;

    }

    .menu-box {
        width: 220px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 3px 10px;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 40px;
        height: 300px;

    }


    .menu-image img {
        border-radius: 10px 10px;
        width: 220px;
        height: 150px;
    }

    .main-content h2 {
        margin-top: 20px;
    }

    .credit {
        font-size: 12px;
    }

    .copyright {
        font-size: 12px;
    }

    .rights {
        font-size: 12px;
    }

    .main-content p {
        font-size: 16px;
    }

    .logout {
        margin-top: -19.7px;
        margin-left: -60px;

    }

    .colorchange {
        background-color: rgba(0, 0, 0, 0.4);
    }

    .colorchange input {
        border: none;
        padding: 20px;
    }

    #birthday {
        border: none;
        padding: 10px;
        border-radius: 5px;
        margin: 10px auto;

    }

    #timepicker {
        border: none;
        padding: 10px;
        border-radius: 5px;
        margin: 10px auto;
    }

    #peoplepicker {
        border: none;
        padding: 10px;
        border-radius: 5px;
        margin: 10px auto;
    }

    #locationpicker {
        border: none;
        padding: 10px;
        border-radius: 5px;
        margin: 10px auto;
    }

</style>

<body>
    <STYle>
        A {
            text-decoration: none;
        }

    </STYle>


    <header>
        <span class="image-clickable">
            <a href="{{ url('/') }}">
                <img src="/images/logo.png" class="logo" />
            </a>
        </span>
        <nav>
            <ul class="nav-links">
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
        <a href="#"><button>Contact Us</button></a>
    </header>

    <div class="bg-image"></div>
    <h1 class="nametag">Find your table for any occasion</h1>
    <div class="bg-text">
        <form action="{{ route('searchrestaurant') }}" class="colorchange" method="GET">
            @csrf
            <input type="date" class="birthday" id="birthday" name="date">


            <select id="timepicker" name="time">
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
            <select id="peoplepicker">
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
            <input type="text" id="locationpicker" name="location" value="{{ request('location') }}"
                placeholder="Location,Restaurant">

            <button type="submit" value="Submit">Submit</button>

            </button>
        </form>
    </div>
    </div>
    <div id="main">
        <div>
            <h3 class="tomorrrowlunch">Recently viewed </h3>
        </div>
        <div class="view"><a href="{{ route('restaurants.recentlyviewed') }}">view all</a></div>
    </div>


    <hr class="pr">

    <div class="boxes">
        @forelse ($popular_restaurants as $restaurant)
            <a href="{{ route('restaurants.show', $restaurant->id) }}">
                <div class="bord-bottom">
                    <div class="menu-box ">
                        <div class="menu-image">
                            <img src="{{ Str::startsWith($restaurant->image, 'http') ? $restaurant->image : asset("storage/$restaurant->image") }}"
                                alt="">
                            <div class="menu-title">
                                <p>{{ $restaurant->title }}</p>
                            </div>
                            <div class="menu-location">
                                <p>{{ $restaurant->location }}</p>
                            </div>
                            <div class="menu-ratings">
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <div>No restaurant found.</div>
        @endforelse


    </div>
    <div id=Pmain>
        <div>
            <h3 class="popularrestaurant">Popular restaurants in Dhaka Division</h3>
        </div>
        <div class="viewP"><a href="{{ route('restaurants.popularrestaurant') }}">view all</a></div>
    </div>

    <hr class="pr">

    <div class="boxes">
        @forelse ($popular_restaurants as $restaurant)
            <a href="{{ route('restaurants.show', $restaurant->id) }}">
                <div class="bord-bottom">
                    <div class="menu-box ">
                        <div class="menu-image">
                            <img src="{{ Str::startsWith($restaurant->image, 'http') ? $restaurant->image : asset("storage/$restaurant->image") }}"
                                alt="">
                            <div class="menu-title">
                                <p>{{ $restaurant->title }}</p>
                            </div>
                            <div class="menu-location">
                                <p>{{ $restaurant->location }}</p>
                            </div>
                            <div class="menu-ratings">
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg height="20px" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
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
    <!-- Site footer -->

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
<!-- footer end -->
