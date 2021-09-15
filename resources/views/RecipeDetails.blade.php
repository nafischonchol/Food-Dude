
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    height: 130px;
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
body {
  background: #fff;
  font: 13px 'Open Sans', sans-serif;
  color: #222;
}
.recipe-card {
  -webkit-box-shadow: 0px 0px 20px 1px rgba(240,241,243,1);
  -moz-box-shadow: 0px 0px 20px 1px rgba(240,241,243,1);
  box-shadow: 0px 0px 20px 1px rgba(240,241,243,1);
  border:1px solid #f0f1f3;
  width: 300px;
  margin: 50px auto;
}
.recipe-card__body {
    padding: 20px;
}
.recipe-card__heading {
  padding: 0;
  margin: 0 0 0;
  color: #444;
}
.recipe-card__subhead {
  font-size: 13px;
  color: #555;
  margin-bottom: 30px;
}
.recipe-card__ingredients {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-left: 10px;
  column-count: 1;
  li {
    margin-bottom: 5px;
  }

  li:before {
    content: '\2022';
    color: #eb9376;
    margin-right: 5px;
  }
}

.recipe-card__methods{
    margin-bottom: 60px;
}
.recipe-card__nav {
  margin: 0 0 20px;
  padding: 0;
  border-bottom: 1px solid #eb9376;
  li {
    display: inline-block;
    margin-right: 30px
  }
  h3 {
    margin: 0;
    padding: 0;
  }
  h3:after {
    content: '';
    display: block;
    width: 0%;
    padding-top: 10px;
    margin: 0 auto;
    border-bottom: 5px solid #eb9376;
    transition: width 250ms ease-in-out 0s;
  }
  h3:hover {
    cursor: pointer;
  }
  h3:hover:after, h3.active:after {
   width: 100%;
  }
}

@media (min-width:599px) {
  .recipe-card {
    width: 600px
  }
  .recipe-card__ingredients {
    column-count: 2
  }
}
.ing{
    margin-left:20px;
}
.saves{
    text-decoration: none;
    color: #888;
    font-size: 20px;
    background-color: aqua;
    text-align: center;
}
.saves a{
    text-decoration: none;

}
.duration{
    font-size: 20px;
    text-align: right;
}
</style>
<body>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

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

<div class='recipe-card'>
  <div style="background:url(https://d2gk7xgygi98cy.cloudfront.net/6267-3-large.jpg) no-repeat 50% 50%; background-size:cover; height: 300px"></div>
  <div class="saves"><a href="saves.html"><i class="fa fa-bookmark"></i> Saves</a></div>
  <div class="duration"><i class="fa fa-clock"></i>Duration: 30min</div>
  <div class="recipe-card__body">
    <h1 class="recipe-card__heading">Oatmeal Cookies</h1>
    <h2 class="recipe-card__subhead">Crunchy around the edges, softer in the center, these oatmeal cookies feature the nutty taste and nubbly texture of oats. </h2>

    <ul class="recipe-card__nav">

        <h3 class="active">Methods</h3>


      <ul class="recipe-card__methods">
        <li>&frac14; cup unsalted butter</li>
        <li>&frac14; cup vegetable shortening</li>
        <li>&frac12; cup light brown sugar</li>

      </ul>
      </div>

        <h3 class="ing" >Ingredients</h3>

    </ul>



    <ul class="recipe-card__ingredients">
    <li>&frac14; cup unsalted butter</li>
    <li>&frac14; cup vegetable shortening</li>
    <li>&frac12; cup light brown sugar</li>
    <li>&frac14; cup granulated sugar</li>
    <li>1 teaspoon vanilla extract</li>
    <li>1 &frac14; teaspoons ground cinnamon</li>
     <li>&#8539; teaspoon ground nutmeg</li>
  <li>1/2 teaspoon salt</li>
  <li>1 teaspoon cider or white vinegar*</li>
<li>1 large egg</li>
  <li>&frac12; teaspoon baking soda</li>
  <li>&frac34; cup All-Purpose Flour</li>
  <li>1 &frac12; cups rolled oats</li>
  <li>1 cup golden raisins, optional</li>
  </ul>
  </div>

 </div>

<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
