<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<style>
    .header-absolute {
        position: absolute;
        z-index: 2;

    }

    .hero-area {
        position: relative;
        z-index: 1;

    }

    .rest-section {
        position: absolute;
        z-index: 4;
    }

    .logo {
        height: 40px;
    }

    .logo img {
        margin: 20px;
        height: 100%;
        position: relative;
        z-index: 1;
    }

    .mainmenu ul {
        list-style: none;


    }

    .mainmenu li {
        display: inline-block;
        position: relative;
    }

    .mainmenu li a {
        padding: 23px 23px;
        display: block;
        color: rgb(14, 77, 77);
        text-decoration: none;


    }

    .registration {
        margin-left: 40px;
        /* margin: 8px; */
        padding: 10px;

    }

    .reg {
        background-color: rgb(14, 77, 77);
        border-radius: 5px;
        padding: 7px;
        color: white;
        border: none;
    }

    .search-bar {
        margin-left: 20px;
        height: 30px;
    }

    .bgc {
        height: 400px;
        width: 100%;
        object-fit: cover;
    }

    .items {
        margin-top: -60px;
        background-color: rgb(255, 250, 250);
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 3px 10px;
        position: sticky;

    }


    .items li {
        display: inline-block;
        position: relative;
    }

    .items li a {
        padding: 23px 23px;
        display: block;
        color: #888;
        text-decoration: none;


    }

    .items li a:hover {
        color: rgb(224, 82, 82);
    }

    .rest-title {
        font-family: Verdana;
        color: rgb(158, 141, 141);
        text-shadow: 2px 8px 6px rgba(0, 0, 0, 0.2), 0px -5px 35px rgba(255, 255, 255, 0.3);
        /* height:100px; */

    }
    .rest-title p{
        font-size: 20px;
    }

    .rest-title:hover {
        color: rgb(224, 82, 82);
    }

    .title-rest {
        font-size: 12px;
        font-size: xx-large;
        font-weight: bold;


    }
    .rest-desc{
        margin-top: 10px;
    }

    .desc-p {
        width: 110px;
    }

    .desc-k {
        line-height: 25px;
        text-align: center;
        margin-top: 10px;
        color: #888;
    }

    .align {
        display: flex;
        align-items: center;
        margin-left: 10px;


    }

    .person {
        height: 30px;
    }

    .person img {
        margin: 20px;
        height: 100%;
    }

    .menu {
        margin-left: -400px;
    }

    /* .p-talks{
    margin-left: -310px;
    font-weight: bold;
} */
    .menu-error {
        color: #888;
        text-align: justify;
    }

    .person {
        line-height: 10px;
        font-size: 11px;
        margin-left: -15px;
        color: #888;
    }

    .comment {
        margin-left: 60px;
        line-height: 20px;
        display: flex;
        align-items: center;
        gap: 10px;

    }

    .comment p,
    .date {
        color: #888;
    }

    .comment-section {
        background-color: #fff;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 3px 10px;
        margin-top: 20px;
        border-radius: 10px;
    }

    .reserve-section {
        background-color: rgb(255, 250, 250);
        box-shadow: rgba(0, 0, 0, 0.35) 3px 3px 10px;
        height: 320px;
        width: 360px;
        margin-top: -60px;
        position: absolute;
        z-index: 2;
        margin-left: 700px;
        border-radius: 10px;
    }

    .section-title {
        margin-top: 10px;
        font-size: x-large;
        font-weight: bold;
        font-family: sans-serif;
        padding-left: 33px;
    }

    .party-person {

        font-weight: bold;
        font-family: sans-serif;

    }

    .party-person select {
        color: #888;
        border: none;
        line-height: 20px;
        padding-left: 10px;
    }

    .party-person select:hover {
        color: black;
    }

    .date {
        border: none;
        padding-left: 10px;
    }

    .date:hover {
        color: black;
    }

    .p-time {
        font-weight: bold;

    }

    .p-select {
        border: none;
        color: #888;
    }

    .p-select:hover {
        color: black;
    }

    .find-time {
        /* align-items: center; */
        background-color: none;
        border: none;
        margin-left: 65px;
        margin-top: 10px;
        font-weight: bold;
        background-color: rgb(224, 82, 82);
        width: 200px;
        padding: 10px;
        border-radius: 5px;
        color: blanchedalmond;



    }

    .find-time:hover {
        color: black;
    }

    .booked-time {
        margin-top: 14px;
        padding-left: 85px;
    }

    .save-this {
        position: absolute;
        z-index: 3;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        margin-left: 950px;
        width: 200px;
        margin-top: 35px;
        padding-left: 20px;
        display: flex;
        gap: 7px;
    }

    .operation-time {
        margin-top: 20px;
        line-height: 15px;


    }

    #h-operation {
        font-weight: bold;

    }

    #h-operation:hover {
        color: #888;
    }

    .item-time {
        font-weight: bold;
        color: rgb(224, 82, 82);
    }

    .item-schedule {
        padding-left: 5px;
        color: #888;


    }

    .item-schedule:hover {
        color: black;
    }

    .restaurant-desc {
        padding: 10px;
        margin-top: 50px;
    }

    .reservation-sec {
        margin-left: 100px;
    }

    .reserve-section {
        margin-left: 800px;
    }

    .menu-error {
        padding: 5px;
    }

    .signin {
        background-color: rgb(14, 77, 77);
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        color: #fff;
    }

    .signup {
        background-color: rgb(14, 77, 77);
        padding: 10px;
        margin-top: 25px;
        border-radius: 5px;
        color: #fff;
    }

    .forpadding {
        margin-top: 10px;
    }
    .reservation-sec{
        width: 480px;
    }

</style>

<body>

    <div class="header-absolute">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="/searching_restaurant"><img src="/images/logo.png" alt=""></a>

                            <p class="save-this"><i class="fa fa-bookmark"></i>Save this restaurant</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="mainmenu">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
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
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                    <img class="bgc"
                        src="{{ Str::startsWith($restaurant->image, 'http') ? $restaurant->image : asset("storage/$restaurant->image") }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="rest-section">

        <div class="col-md-5 text-center reservation-sec">
            <div class="items">
                <li><a href="overview.html">Overview</a></li>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="menus.html">Menus</a></li>
                <li><a href="reviews.html">Reviews</a></li>
                <hr>
                <div class="rest-title">
                    <p class="title-rest">{{ $restaurant->title }}</p>
                    <hr>
                </div>
                <div class="rest-desc">
                    <div class="row">
                        <div class="col-md-5  align">
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
                            <span class="desc-p-rate">4.4</span>



                        </div>
                        <div class="col-md-3 text-center">
                            <span class="desc-p"> <i class="fa fa-comment"></i>13 reviews</span>
                        </div>
                        <div class="col-md-3 text-right">
                            <p class="desc-p"><i class="fa fa-globe"></i>{{ $restaurant->locale }}</p>
                        </div>
                    </div>
                    <div class="descr">
                        <br>
                        <p class="desc-k">{{ $restaurant->description }}</p>
                        <br>
                        <hr>
                        <div class="item">
                            <ul>
                                <li><a href="/food">Food</a></li>
                                <li><a href="/interior">Interior</a></li>
                                <li><a href="/exterior">Exterior</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-items">
                        <hr>
                        <B class="menu">Menu</B>
                        <br>
                        <br>
                        <p class="menu-error">At present, we do not have menu information for this restaurant.
                            Please
                            see their website or
                            wait to visit the restaurant to learn more.</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reserve-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-title">
                        <P>Make a resevation</P>
                        <hr>
                    </div>
                    <div class="party-person">
                        <P>Party size</P>
                        <select name="Person">
                            <option value="Select People">Select people</option>
                            <option value="1 Person">1 Person</option>
                            <option value="2 people">2 People</option>
                            <option value="3 people">3 People</option>
                            <option value="4 people">4 People</option>
                            <option value="5 people">5 People</option>
                            <option value="6 people">6 People</option>
                            <option value="7 people">7 People</option>
                            <option value="8 people">8 People</option>
                            <option value="9 people">9 People</option>
                            <option value="10 people">10 People</option>
                            <option value="11 people">11 People</option>
                            <option value="12 people">12 People</option>
                            <option value="13 people">13 People</option>
                            <option value="14 people">14 People</option>
                            <option value="15 people">15 People</option>
                            <option value="16 people">16 People</option>
                            <option value="17 people">17 People</option>
                            <option value="18 people">18 People</option>
                            <option value="19 people">19 People</option>
                            <option value="20 people">20 People</option>
                        </select>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="start">Date</label><br>

                            <input class="date" type="date" id="start" name="trip-start" value="2018-07-22"
                                min="2018-01-01" max="2018-12-31">
                        </div>
                        <div class="col-md-6">
                            <div class="Party-time">
                                <P class="p-time">Time</P>
                                <select class="p-select" name="Time">
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

                            </div>
                        </div>
                    </div>
                    <button class="find-time" type="submit">Find a Time</button>
                    <p class="booked-time"><i class="fa fa-book"></i>Booked 12 times todday</p>

                </div>
            </div>
        </div>
        <div class="operation-time">
            <span>
                <p id="h-operation"> <i class="fa fa-clock-o" aria-hidden="true"></i> Hours of operation</p>
                <p class="item-time">{{ $restaurant->hours_of_operation }}</p>

            </span>
        </div>
        <div class="restaurant-desc">
            <p class="item-time"><i class="fa fa-spoon" aria-hidden="true"></i> Restaurant</p>
            <p class="item-schedule"> International</p>
            <p class="item-time"><i class="fas fa-fish"></i>Dining style</p>
            <p class="item-schedule">{{ $restaurant->dining_style }}</p>
            <p class="item-time"><i class="fas fa-user-tie"></i>Dress Code</p>
            <p class="item-schedule">{{ $restaurant->dress_code }}</p>
            <p class="item-time">Location</p>
            <p class="item-schedule">{{ $restaurant->location }}</p>
            <p class="item-time"><i class="fa fa-window-maximize" aria-hidden="true"></i> Website</p>
            <p class="item-schedule">{{ $restaurant->website }}</p>
            <p class="item-time"><i class="fa fa-phone"></i>Contact</p>
            <p class="item-schedule">{{ $restaurant->contact }}</p>


        </div>
    </div>



    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
