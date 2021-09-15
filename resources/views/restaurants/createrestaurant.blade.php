@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lily+Script+One);

body {
	margin:0;
	font-family:arial,tahoma,sans-serif;
	font-size:12px;
	font-weight:normal;
	direction:ltr;
  background:white;
}

form {
	margin:10% auto 0 auto;
	padding:30px;
	width:400px;
	height:auto;
	overflow:hidden;
	background:white;
	border-radius:10px;
}

form label {
	font-size:14px;
	color:darkgray;
	cursor:pointer;
}

form label,
form input {
	float:left;
	clear:both;
}

form input {
	margin:15px 0;
	padding:15px 10px;
	width:100%;
	outline:none;
	border:1px solid #bbb;
	border-radius:20px;
	display:inline-block;
	-webkit-box-sizing:border-box;
	   -moz-box-sizing:border-box;
	        box-sizing:border-box;
    -webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}

form input[type=text]:focus,
form input[type="password"]:focus {
	border-color:cornflowerblue;
}

input[type=submit] {
	padding:15px 50px;
	width:auto;
	background:#1abc9c;
	border:none;
	color:white;
	cursor:pointer;
	display:inline-block;
	float:right;
	clear:right;
	-webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}

input[type=submit]:hover {
	opacity:0.8;
}

input[type="submit"]:active {
	opacity:0.4;
}

.forgot,
.register {
	margin:10px;
	float:left;
	clear:left;
	display:inline-block;
	color:cornflowerblue;
	text-decoration:none;
}

.forgot:hover,
.register:hover {
	color:darkgray;
}

#logo {
	margin:0 auto;
	width:200px;
	font-family:'Lily Script One', cursive;
	font-size:60px;
	font-weight:bold;
	text-align:center;
	color:lightgray;
	-webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}
button{
    border: none;
    background-color: #888;
    padding: 10px;
    border-radius: 10px;
}
#logo:hover {
	color:cornflowerblue;
}
</style>
<body>
    @section('content')
    <form action="{{ route('restaurants.store') }}" method="post" enctype="multipart/form-data">

        @csrf
            <h3 id="logo">FoodDude</h3>
        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="Title">
        <label for="title">Locale:</label>
        <input type="text" name="locale" placeholder="Locale">

        <label for="duration">location:</label>
        <input type="text" name="location" placeholder="Location">

        <label for="author">Hours_of_operation:</label>
        <textarea name="hours_of_operation" cols="30" rows="1" placeholder="Hours Of Operation"></textarea>
        <label for="image">Upload an image</label>
        <input type="file" name="image" placeholder="Select Image">
        <label for="description">Description:</label>
        <textarea name="description" cols="30" rows="10" placeholder="Description"></textarea>
        <label for="author">Dining_style:</label>
        <input type="text" name="dining_style" placeholder="Dining_style">
        <label for="author">Dress_code:</label>
        <input type="text" name="dress_code" placeholder="Dress_code">
        <label for="author">Website:</label>
        <input type="text" name="website" placeholder="Website">
        <label for="author">Contact:</label>
        <input type="text" name="contact" placeholder="Contact">

        <button type="submit">Add New Recipie</button>

    </form>
@endsection
</body>
</html>

