<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Food Dude-I'm Resturant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

@php
    if(!isset($data[0]))
        echo '<script>window.location = "/mainmenu"</script>';
@endphp
<body>
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box bg-dark">
                                <div class="text-center p-3">
                                    <a href="{{route('resturant-profile')}}" class="logo logo-admin">

                                        <img src="{{ asset('images/logo/fooddude.jpeg') }}" height="50" alt="logo"
                                            class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Start with Food Dude</h4>
                                    <p class="text-muted  mb-0">Update your profile</p>
                                </div>
                            </div>
                            <div class="card-body p-0">

                                <div class="col px-3 pt-3">
                                    <form class="form-horizontal" method="post" action="{{ route('iamrestaurant-update') }}" enctype="multipart/form-data">
                                        @csrf
                                        @if (session('warning'))
                                            <span class="alert alert-danger d-block" role="alert">
                                                <strong>{{ session('warning') }}</strong>
                                            </span>
                                        @endif
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="username">Mobile <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" value="{{ $data[0]->mobile }}" class="form-control form-control-sm" name="mobile" id="mobile" required data-parsley-minlength="11" placeholder="Min 11 chars.">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label for="owner">Owner Name<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" value="{{  $data[0]->owner }}" class="form-control form-control-sm" name="owner" id="owner" required placeholder="Owner Name">
                                                    </div>
                                                </div>


                                                <div class="form-group mb-2">
                                                    <label for="city">City<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" value="{{ $data[0]->city }}" class="form-control form-control-sm" name="city" id="city" placeholder="City" required>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label for="location">Resturant Address</label>
                                                    <div class="input-group">
                                                        <input type="text" value="{{  $data[0]->location }}" class="form-control form-control-sm" name="location" id="location" placeholder="Resturant Address">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group mb-2">
                                                    <label for="res_name">Note For Customer</label>
                                                    <div class="input-group">
                                                        <textarea  class="form-control form-control-sm" name="note" rows="3" >{{  $data[0]->note }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="res_name">Important dining information</label>
                                                    <div class="input-group">
                                                        <textarea  class="form-control form-control-sm" name="diningInfo" rows="3" >{{  $data[0]->diningInfo }}</textarea>
                                                    </div>
                                                </div>
                                                
                                                <!--end form-group-->
                                                <hr>


                                            </div>

                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="useremail">Email</label>
                                                    <div class="input-group">
                                                        <input type="email" value="{{  $data[0]->email }}" id="email" name="email" class="form-control form-control-sm" required parsley-type="email" placeholder="E-mail" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="res_name">Resturant Name<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text"  value="{{  $data[0]->res_name }}" class="form-control form-control-sm" name="res_name" id="res_name" placeholder="Resturant Name" required>
                                                    </div>
                                                </div>
                                                
                                               
                                                
                                                <div class="form-group mb-2 ml-2">
                                                    <label for="conf_password">Website</label>
                                                    <div class="input-group">
                                                        <input type="text" value="{{  $data[0]->website }}" class="form-control form-control-sm" name="website" id="website" placeholder="Enter website">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="Image">Image</label>
                                                    <div class="input-group">
                                                        <input type="file" class="form-control form-control-sm" name="image">
                                                    </div>
                                                </div>
                                                
                                                <br>
                                                <div class="form-group mb-2">
                                                    <label for="res_name">About Resturant</label>
                                                    <div class="input-group">
                                                        <textarea  class="form-control form-control-sm" name="description" rows="6" >{{  $data[0]->description }}</textarea>
                                                    </div>
                                                </div>
                                                
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                    
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block" type="submit"> Update </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end form-->
                                </div>
                            </div>
                            <!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">Food Dude © <?php echo date('Y'); ?></span>
                            </div>

                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

</body>

</html>
