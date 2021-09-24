
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Dude</title>
    <link rel="stylesheet" href="{{ asset('css/resturant-show/foods.css') }}">

</head>

<body>
    <div class="heading">
        <a href="/ownrestaurant"><img src="/images/logo/logo.png" alt=""></a>
    </div>
    <div class="container">
        <div class="top">
           

			<ul class="text-center">
				@if(isset($exterior[0]))
					@foreach ($exterior as $item)
						<li><img src="{{ asset('images/gallery/'.$item->image) }}"></li>
					@endforeach
					@else
						
						<li >
							<h3>No food available </h3>
							<a href="#img_1">  <img src="https://www.nps.gov/chcu/planyourvisit/images/No-Food.jpg?maxwidth=650&autorotate=false"></a>
						</li>
				@endif
            </ul>
        </div>
    </div>
</body>
</html>
