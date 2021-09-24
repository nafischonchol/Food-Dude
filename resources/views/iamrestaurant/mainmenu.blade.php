@php
$iconarray = [

    // oshud os
    'Admin Roles' => 'fas fa-user-shield ',
    'Hr Create' =>'fa fa-user-plus',
    'Generic Name' => 'fas fa-dna',
    'Pharmaceuticals'=>'fas fa-prescription-bottle',
    'Product'=>'fas fa-medkit',
    'Top Products'=> 'fas fa-file-medical-alt',
    'Customers'=>'fas fa-users',
    'Order' =>'fas fa-shopping-bag',
    'Setting'=>'fas fa-user-cog',
    'Stocks'=>'fas fa-archive',

];

@endphp

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('meta')

    <title>Food Dude</title>
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Font Awesome JS -->
    <script defer src="{{asset('js/solid.js')}}" crossorigin="anonymous"></script>
    <script defer src="{{asset('js/fontAwesomeJs.js')}}" crossorigin="anonymous"></script>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/admin/admin_panel.css') }}">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <img class="babui-logo" src="{{ asset('images/logo/fooddude.jpeg') }}" alt="logo">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">{{ session('res_name') }} <img class="rounded-circle user-img" src="{{ asset('images/resturant/noimage.jpg') }}" alt="user-img"></a>
            </li>
        </ul>
    </nav>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <a class="nav-link" href="#"><img class="rounded-circle user-img"
                    src="{{ asset('images/resturant/noimage.jpg') }}" alt="user-img">{{ session()->get('owner') }}</a>
            <small class="ml-5"><i class="fas fa-circle  mr-2 text-success"></i>Online</small>


            <ul class="list-unstyled components left-side-bar">
                <li class="active">
                    <a href="#orders" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        
                        <i class="fas fa-shopping-bag"></i> <small>Orders</small>
                    </a>

                    <ul class="collapse list-unstyled" id="orders">
                        <li>
                            <a href="orders">
                                <i class="fas fa-circle"></i>
                                <small>Show Order</small>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#fooddude" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <i class="fas fa-archive"></i> <small>Food Dude</small>
                    </a>

                    <ul class="collapse list-unstyled" id="fooddude">
                        <li>
                            <a href="{{route ('your-table') }}">
                                <i class="fas fa-circle"></i>
                                <small>Your Table</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#menu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <i class="fas fa-medkit"></i> <small>Menu</small>
                    </a>
                    <ul class="collapse list-unstyled" id="menu">
                        <li>
                            <a href="{{route ('show-admin-manu') }}">
                                <i class="fas fa-circle"></i>
                                <small>Show Menu</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#gallery" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <i class="fas fa-dna"></i> <small>Gallery</small>
                    </a>

                    <ul class="collapse list-unstyled" id="gallery">
                        <li>
                            <a href="{{route ('show-galleries') }}">
                                <i class="fas fa-circle"></i>
                                <small>Show</small>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#setting" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <i class="fas fa-user-cog"></i> <small>Setting</small>
                    </a>

                    <ul class="collapse list-unstyled" id="setting">
                        <li>
                            <a href="{{route ('resturant-profile') }}">
                                <i class="fas fa-circle"></i>
                                <small>Profile</small>
                            </a>
                        </li>
                        <li>
                            <a href="{{route ('resturant-logout') }}">
                                <i class="fas fa-circle"></i>
                                <small>Logout</small>
                            </a>
                        </li>
                    </ul>
                </li>

               
            </ul>
            
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            {{-- Here will fit main content --}}
            <div class="main_content">
                @yield('main_content')
            </div>

        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- this js --}}
    @yield('js')


</body>

</html>
