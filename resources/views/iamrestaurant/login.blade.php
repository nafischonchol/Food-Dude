<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Food Dude-I'm Resturant</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

<!-- Log In page -->
<div class="container">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body p-0 auth-header-box bg-dark">
                            <div class="text-center p-3">
                                <a href="index.html" class="logo logo-admin">
                                    <img src="{{ asset('images/logo/fooddude.jpeg') }}" height="50" alt="logo" class="auth-logo">
                                </a>
                                <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18"> Let's Get Start with Food Dude</h4>
                                <p class="text-muted  mb-0">Sign in to continue Food Dude.</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                    <form class="form-horizontal auth-form" id="authform">
                                        <div class="form-group mb-2">
                                            <label for="username">Username</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                            </div>
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label for="userpassword">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                            </div>
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group row my-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-switch switch-success">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customSwitchSuccess">
                                                    <label class="custom-control-label text-muted"
                                                        for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-sm-6 text-right">
                                                {{-- <a href="#" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a> --}}
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">

                                                <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    id="btnlogin" type="button">
                                                    <span id="loginspinner" class="mr-2" role="status"
                                                        aria-hidden="true"></span>
                                                    Log In <i class="fas fa-sign-in-alt ml-1"></i>
                                                </button>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end form-group-->
                                    </form>
                                    <!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Don't have an account ? <a class="text-primary ml-2" href="{{ URL::route('iamrestaurant-reg') }}"> Easy Registration</a></p>
                                    </div>
                                </div>
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
    <!-- End Log In page -->


    </div>
    <script src="./theme/assets/js/jquery.min.js"></script>
    <script src="./theme/assets/js/bootstrap.bundle.min.js"></script>
    <script src="./theme/assets/js/waves.js"></script>
    <script src="./theme/assets/js/feather.min.js"></script>
    <script src="./theme/assets/js/simplebar.min.js"></script>
    <script src="./theme/assets/js/jquery.validate.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="./theme/plugins/sweet-alert2/sweetalert2.min.js"></script>

    <script>
        function highlitenav(nvi) {
            var len = $('#navbar li').length;
            var $listItems = $('#navbar li');
            $listItems.removeClass('active');
            // for(var i=1; i<len; i++){
            //         $('#navitem'+i).removeClass('active');
            //     }
            $('#' + nvi).addClass('active');

        }
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: function(toast) {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>

    <script>
        highlitenav('navitem1');

        $('#btnlogin').on('click', function(e) {
            e.preventDefault();

            $.ajax({

                url: "https://nagbak.com/?page=login&action=logininit",
                type: "POST",
                data: $('#authform').serialize(),

                beforeSend: function() {
                    $('#btnlogin').prop('disabled', true)
                    $('#loginspinner').addClass('spinner-border spinner-border-sm')

                },
                success: function(result) {

                    $('#btnlogin').prop('disabled', false)
                    $('#loginspinner').removeClass('spinner-border spinner-border-sm')
                    const resultobj = JSON.parse(result);
                    if (resultobj['result'] == 'success') {

                        location.href = "https://nagbak.com/?page=salesdashboard&action=init";
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: resultobj['message']
                        })
                    }

                },
                error: function(xhr, resp, text) {

                    $('#btnlogin').prop('disabled', false)
                    $('#loginspinner').removeClass('spinner-border spinner-border-sm')
                }
            })
        })
    </script>

</body>

</html>
