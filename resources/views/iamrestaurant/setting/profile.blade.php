@extends('iamrestaurant.mainmenu')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/resturantProfile.css') }}">
@endsection
@section('main_content')

@isset($data[0])
    <div class="container ">
        @if (session('success'))
            <span class="alert alert-success d-block" role="alert">
                <strong>{{ session('success') }}</strong>
            </span>
        @endif
            <div class="row">
                <div class="col-md-3">
                    <div class="profile-img">
                        <img src="{{ asset('images/resturant/'.$data[0]->image) }}" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            {{ $data[0]->res_name }}
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ $data[0]->res_name }}
                        </h5>
                        <h6>
                            {{ $data[0]->city }}
                        </h6>
                        <p class="proile-rating">Ratting : <span>8/10</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('edit-resturant') }}">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile">
                    </a>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                   
                </div>
                <div class="col-md-9">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Resturan Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $data[0]->res_name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Owner Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $data[0]->owner }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Conatct Number</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data[0]->mobile}}</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $data[0]->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>City</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $data[0]->city }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $data[0]->location }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-9">
                                    <span>{{$data[0]->email}}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label>Website</label>
                                </div>
                                <div class="col-md-9">
                                    <span>{{$data[0]->website}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label>About Resturant</label>
                                </div>
                                <div class="col-md-9">
                                    <span>{{$data[0]->description}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label>Note for Customer</label>
                                </div>
                                <div class="col-md-9">
                                    <span>{{$data[0]->note}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label>Important dining information</label>
                                </div>
                                <div class="col-md-9">
                                    <span>{{ $data[0]->diningInfo }}</span>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
     
    </div>
@endisset
@endsection
