@extends('searching.header')
@section('css')
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/searching/complatereservation.css') }}">
@endsection
@section('content')

    <body>

        <div class="hero-area col-md-12 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 left-part">
                        <h3><b>You're almost done!</b></h3>
                        
                        <div class="flexing">
                            <a href="" class="image"><img src="{{ asset('images/resturant/' . $data[0]->image) }}"
                                    alt=""></a>
                            <h4 id="name-rest">{{ $data[0]->res_name }}</h4>
                            <div class="schedule">
                                <h5><i class="fa fa-calendar" aria-hidden="true"></i> 
                                    
                                    @php
                                         $date = date_create($result['date']);
                                         $date=date_format($date, 'l,F j');
                                         echo $date;
                                    @endphp 
                                </h5>
                                <h5><i class="fa fa-clock" aria-hidden="true"></i> {{ $result['hour'] }}</h5>
                                <h5><i class="fa fa-user" aria-hidden="true"></i> {{ $result['people'] }} People</h5>
                            </div>
                        </div>
                        <h4 id="d-details">Diner details</h4>
                        <p>After complete reservation you have to pay 100tk for confirm your reservation</p>
                        @if (session('warning'))
                            <span class="alert alert-danger form-control" role="alert">
                                <strong>{{ session('warning') }}</strong>
                            </span>
                        @endif
                      
                        
                          <form action="{{ url('/pay') }}" method="POST">

                            @csrf
                          
                            <input type="hidden" name="res_name" value="{{$data[0]->res_name}}">
                            <input type="hidden" name="date" value="{{session('reserve_hour')}}" >
                            <input type="hidden" name="res_id" value="{{$data[0]->id}}">

   
                            <input type="text" name='fname' placeholder="First name" value="{{ old('fname') }}">
                            <input type="text" name='lname' placeholder="Last name" value="{{ old('lname') }}"><br>
                           
                            <input name="mobile" type="text" placeholder="Mobile number" value="{{ old('mobile') }}">
                            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
                            <textarea  id="textarea" name='specialReq' placeholder="Add a special request(optional)">{{ old('specialReq') }}</textarea>
                          
                            <button id="b-utton" type="submit">Complete reservation</button>

                            
                        </form>
                        <p id="terms">By clicking “Complete reservation” you agree to the Food Dude Terms of Use and Privacy
                            Policy. Standard text message rates may apply.</p>


                    </div>
                    <div class="col-md-5 right-part">
                        <h4><b>What to know before you go</b></h4>
                        <h4>Important dining information</h4>
                        <p>{{ $data[0]->diningInfo }}</p>
                        <h4><b>A note from the restaurant</b></h4>
                        <p>{{ $data[0]->note }}</p>
                    </div>

                </div>
            </div>
        </div>



        <script src="jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script>
            (function (window, document) {
                var loader = function () {
                    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                    tag.parentNode.insertBefore(script, tag);
                };

                window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
            })(window, document);
        </script>
    </body>

    </html>

@endsection
