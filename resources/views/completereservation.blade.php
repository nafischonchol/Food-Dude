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

    .image {

        height: 100px;
        width: 100px;
        margin: 0;
        padding: 0;
    }

    .image img {
        height: 100px;
        width: 100px;

    }

    .desc {
    background-color: rgb(255, 247, 247);
        height: 100px;


    }

    .flexing {
display: flex;

height: 100px;
background-color: rgb(255, 247, 247);


    }
    .flexing h3{
        width: 100px;
    }

    .schedule {
        display: flex;
        gap: 25px;
        margin-left: -65px;
        margin-top: 40px;

    }
input{
    padding: 10px;
    width: 323px;
    border-radius: 5px;
    border: 1px solid #888;
    margin-top: 10px;
}
select{
 border: 1px solid #888;
 padding: 11.3px;
 width: 100px;
 border-radius: 5px;
}
#phone{
    width: 225px;
    margin-left: -5px;
}
#textarea{
    margin-top: 10px;
    padding: 10px;
    width: 323px;
    border-radius: 5px;
    border: 1px solid #888;
}
#d-details{
    margin-top: 10px;
}
#b-utton{
    width: 652.5px;
    margin: 0;
    border-radius: 5px;
    margin-top: 10px;
}
#terms{
    margin-top: 10px;
}
.right-part{
width: 450px;
}
#name-rest{
    padding-left: 5px;;
}
</style>

<body>
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
    </header>
    <div class="hero-area col-md-10 col-md-offset-1">
        <div class="container">
            <div class="row">
                <div class="col-md-7 left-part">
                    <h3><b>You're almost done!</b></h3>
                    <div class="flexing">
                        <a href="" class="image"><img src="/images/sp.jpg" alt=""></a>
                        <h3 id="name-rest"><b>Jeonga</b></h3>
                        <div class="schedule">
                            <h5><i class="fa fa-calendar" aria-hidden="true"></i> Fri,Sep 10</h5>
                            <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 6:30PM</h5>
                            <h5><i class="fa fa-user" aria-hidden="true"></i> 2 People</h5>
                        </div>
                    </div>
                    <h4 id="d-details">Diner details</h4>
                    <form action="">
                        <input type="text " placeholder="First name">
                        <input type="text " placeholder="Last name"><br>
                        <select>
                            <option value="afganisthan">Afganisthan +93</option>
                            <option value="argrntina">Argentina +54</option>
                            <option value="bangladesh">Bangladesh +880</option>
                            <option value="bermuda">Bermuda +1</option>
                            <option value="Canada">Canda+1</option>
                            <option value="Costarica">Costarica+506</option>
                            <option value="denmark">Denmark+45</option>
                            <option value="egypt">Egypt +20</option>
                        </select>
                        <input id="phone" type="text" placeholder="Phone number">
                        <input type="text" placeholder="E-mail"> <br>
                        <textarea id="textarea" placeholder="Add a special request(optional)" cols="25" rows="1"></textarea>

                    </form>
                    <h4>Credit card required</h4>
                    <p>Jeong requires 24 hours notice for cancellations. Reservations that are cancelled with less than 24 hours notice will be subject to a $35/person fee on their credit card.</p><br>

                    <p>Online modifications can be made until 5pm on Sep 9, 2021. Any modifications or cancellations after 5pm on Sep 9, 2021 will require you to contact the restaurant directly and are held to the restaurant’s policy and may be subject to fees.</p>
                    <form action="">
                        <input type="text" placeholder="Name on Card">
                        <input type="text" placeholder="1234 1234 1234 1234"><br>
                        <input type="date" placeholder="MM/YY">
                        <input type="text" placeholder="CVC">
                        <input type="text" placeholder="ZIP Code"><br>
                        <button id="b-utton" type="submit">Complete reservation</button>

                    </form>
                    <p id="terms">By clicking “Complete reservation” you agree to the OpenTable Terms of Use and Privacy Policy. Standard text message rates may apply. You may opt out of receiving text messages at any time.</p>


                </div>
                <div class="col-md-5 right-part">
                   <h4><b>What to know before you go</b></h4>
                   <h4>Important dining information</h4>
                   <p>We have a 15 minute grace period. Please call us if you are running later than 15 minutes after your reservation time.</p>
                   <p>We may contact you about this reservation, so please ensure your email and phone number are up to date.</p>
                   <p>Your table will be reserved for 2 hours.</p>
                   <h4><b>A note from the restaurant</b></h4>
                   <p>We are looking forward to having you in for our 7-course tasting menu! At the moment, we are not accommodating any dietary restrictions. We are a very small team at the moment and once we are streamlined we will be accepting dietary restrictions! Please bear with us! Thank you and cannot wait to have you in!</p>
            </div>

            </div>
        </div>
    </div>
    </div>


    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
