<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Food Dude-I'm Resturant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box bg-dark">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">

                                        <img src="{{ asset('images/logo/fooddude.jpeg') }}" height="50" alt="logo"
                                            class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Start with
                                        Food Dude</h4>
                                    <p class="text-muted  mb-0">Rgister your account.</p>
                                </div>
                            </div>
                            <div class="card-body p-0">

                                <div class="col px-3 pt-3">
                                    <form class="form-horizontal auth-form" id="frmregister" method="post" action="{{route('iamrestaurant-reg')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="username">Mobile</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="mobile" id="mobile" required
                                                            data-parsley-minlength="11" placeholder="Min 11 chars.">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label for="owner">Owner Name</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="owner" id="owner" required placeholder="Owner Name">
                                                    </div>
                                                </div>

                                                    
                                                <div class="form-group mb-2">
                                                    <label for="city">City</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="city" id="city" placeholder="City">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label for="location">Resturant Address</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="location" id="location" placeholder="Resturant Address">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="userpassword">Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control form-control-sm" name="pass" id="pass" placeholder="Password">
                                                    </div>
                                                </div>
                                                <!--end form-group-->
                                                <hr>


                                            </div>

                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="useremail">Email</label>
                                                    <div class="input-group">
                                                        <input type="email" id="email" name="email" class="form-control form-control-sm" required parsley-type="email" placeholder="E-mail" />
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="res_name">Resturant Name</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="res_name" id="res_name" placeholder="Resturant Name">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="res_name">Description</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="description" id="description" placeholder="Resturant Description">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 ml-2">
                                                    <label for="conf_password">Website</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="website" id="website" placeholder="Enter website">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2 ml-2">
                                                    <label for="conf_password">Confirm Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control form-control-sm" name="con_pass" id="con_pass" placeholder="Enter Confirm Password">
                                                    </div>
                                                </div>
                                               
                                                    <!--end col-->
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <div class="form-group row my-3">
                                                <div class="col-sm-12">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input" checked id="isagree" name="isagree">
                                                        <label class="custom-control-label text-muted" for="isagree">You agree to the Food Dude <a href="#" class="text-primary">Terms of Service</a></label>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button
                                                        class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                                        <span id="regspinner" class="mr-2" role="status" aria-hidden="true"></span>
                                                        Register <i class="fas fa-sign-in-alt ml-1"></i>
                                                    </button>
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
