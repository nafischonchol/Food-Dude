<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<style>
    .heading-section {
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bolder;
    background-color:#000;
    height: 270px;
}

.heading-title {
    font-size: xx-large;
}
.heading-title a {
    color: White;
    text-decoration: none;
    text-shadow: 2px 8px 6px rgba(190, 122, 245, 0.2), 0px -5px 35px rgba(255, 255, 255, 0.3)
}

.heading-title a:hover {
    color: aqua;
    cursor: pointer;
    text-decoration: none;
}

.heading-option a,
.aside-option a {

    color: white;
    padding-left: 20px;
    text-decoration: none;

    text-shadow: 2px 8px 6px rgba(190, 122, 245, 0.2), 0px -5px 35px rgba(255, 255, 255, 0.3)
}

.heading-option a:hover,
.aside-option a:hover {
    color: aqua;
    text-transform: uppercase;
    text-decoration: none;

}

.heading-option,
.aside-option {
    margin-top: 12px;

}
.border{
    background-color: aqua;
    margin-top: 10px;
    height: 8px;
}
.border:hover{

    background: #1e5799;
background: -moz-linear-gradient(-45deg,  #1e5799 0%, #7db9e8 100%);
background: -webkit-linear-gradient(-45deg,  #1e5799 0%,#7db9e8 100%);
background: linear-gradient(135deg,  #1e5799 0%,#7db9e8 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 );

}
.gredient-image{
    background-image: linear-gradient(to right, rgb(97, 97, 184), aqua);
    height: 100px;
    text-align: center;

    border: none;
    width: 80%;
    margin-left: 10%;
}
.search-bar input{
 width: 300px;
 padding: 5px;
}
.search-bar button{
width: 40px;
 padding: 5px;
 margin-top: 0px;

}
.search-bar h2{
 line-height: 50px;
}
.search-items{
    margin-top: 20px;
    margin-left: -950px;
    color: aqua;
}
.recent-search-list {
    margin-top: -10px;
    display: flex;
    flex-direction: row;
    width: 600px;
    color:aqua;
    gap: 10px;
}
.recent-search-list a{
    color: aqua;
    text-decoration: none;
}
.recent-search-list a:hover{
    text-decoration: none;
}

.T-recipes a {
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: rgb(224, 82, 82);
    text-transform: uppercase;
    text-decoration: none;

}

.T-view a {
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: rgb(224, 82, 82);
    text-decoration: none;

}

#arrow {
    margin-left: 5px;

}

.menu-title,
{
    width: 120px;
    text-align: center;
    color: #888;
    height: 40px;
    line-height: 2.2rem;
}
.menu-author {
    width: 120px;
    text-align: center;
    color: #888;
    height: 40px;
    line-height: 2.2rem;
}

.menu-box {
    background-color: rgb(253, 250, 250);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 3px 10px;
    height:300px;
    width: 200px;
    margin: 1% 1%;
    border-radius: 10px;
    margin-bottom: 40px;
}

.py-5 {
    padding-top: 40px;
    padding-bottom: 40px;
}

.menu-image img {

    width: 200px;
    height: 150px;
    margin-left: -15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.duration{
    text-align: center;
}
/* .Newest-section{
    border-bottom: 10px solid #888;
    margin-bottom: 40px;

} */
/* .Trending-section {
    border-bottom: 10px solid #888;
    margin-bottom: 40px;

} */

.menu-author:hover,
.menu-title:hover {
    color: rgb(224, 82, 82);
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


/* search */
.gredient-image{
    background-image: linear-gradient(to right, rgb(97, 97, 184), aqua);
    height: 100px;
    text-align: center;
    opacity: 0.8;
    border: none;
}
.search-bar input{
 width: 300px;
 padding: 5px;
}
.search-bar button{
width: 40px;
 padding: 5px;
 margin-top: 0px;

}
.search-bar h2{
 line-height: 50px;
}
</style>
<body>

    <div class="heading-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center heading-title">
                    <a href="/cookfood">FoodDude</a>

                </div>
                <div class="col-md-5 text-center heading-option">
                    <a href="recipes.html">recipes</a>
                    <a href="popular.html">Popular</a>
                </div>
                <div class="col-md-4 text-right">
                    <div class="aside-option">
                        <a href="{{ route('recipes.create') }}"><i class="fa fa-search"></i> Add New</a>
                        <a href="saves.html"><i class="fa fa-bookmark"></i> Saves</a>
                        @guest
                        <a href="{{ route('login') }}"><i class="fa fa-user"></i> SIGN IN</a>
                        <a href="{{ route('register') }}"><i class="fa fa-user"></i> SIGN UP</a>
                        @else
                        <div class="logout" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest

                    </div>
                </div>
            </div>
        </div>
        <div class="border">
 </div>
        <div class="ingredients-search">
            <div class="gredient-image">
                <div class="search-bar">
                    <form method="get">
                        <h2>Make recipe by your own ingredients</h2>
                        <input type="text" name="query" value="{{ request('query') }}" placeholder="Search..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="search-items">
                    <p>Search Items</p>
                </div>
                <div class="recent-search-list">
                    <a href="#">Milk</a>
                    <a href="#">Sugar</a>
                    <a href="#">Rice</a>
                    <a href="#">Potato</a>
                    <a href="#">Oil</a>
                </div>
            </div>
        </div>
    </div>

    <div class="Trending-section">
        <div class="container">
            <div class="row no-gutters py-5">
                <div class="col-md-10 text-left T-recipes">
                    <a href="trending.html">31 RECIPES FOUNDED</a>
                </div>

                <div class="col-md-2 text-right T-view">
                    <a href="view.html">View All<i id="arrow" class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="row bord-bottom" style="justify-content: space-between;">


                @forelse ($recipes as $recipe)
              <a href="/recipe-details">  <div class="col-md-2 menu-box ">
                    <div class="menu-image">
                        <img src="{{ $recipe->image ? asset('storage/' . $recipe->image) : 'https://img.sndimg.com/food/image/upload/w_155,h_116,fl_progressive,q_80,c_fill/v1/img/recipes/54/20/67/4XfFQjjkQFu1eek9QYih_0S9A3828.jpg' }}"
                            alt="">
                        <div class="menu-title">
                            <p>{{ $recipe->title }}</p>
                        </div>
                        <div class="menu-author">
                            <p>{{ $recipe->author }}</p>
                        </div>
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
                        <div class="duration">
                            <p>{{ $recipe->duration }}</p>
                        </div>

                    </div>
                </div>
             </a>
                @empty
                    <h3>No result found.</h3>
                @endforelse

            </div>

            {{ $recipes->links() }}

        </div>
    </div>
     <!-- Site footer -->
     <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About Us</h6>
                    <p class="text-justify">FoodDude is part of Online retaurant reservation , Helps the Cookers.</p>
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
