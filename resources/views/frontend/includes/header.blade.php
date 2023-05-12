
<header class="header-area header-area-five fixed-top">
    <!-- Start Navbar Area -->
    <div class="nav-area nev-style-five">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ url('') }}" class="logo">
                    <img src="{{ url('public/images') }}/{{ Cmf::get_store_value('header_logo') }}" alt="Logo">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('') }}">
                            <img src="{{ url('public/images') }}/{{ Cmf::get_store_value('header_logo') }}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ url('') }}" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('travel-insurance') }}" class="nav-link dropdown-toggle">
                                         Travel Insurance
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('travel-insurance') }}" class="nav-link">Travel Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('super-visa-insurance') }}" class="nav-link">Super Visa Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('visitor-insurance') }}" class="nav-link">Visitor Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('student-insurance') }}" class="nav-link">Student Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                                                Insurance For Candians
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="{{ url('single-trip-insurance') }}" class="nav-link">Single Trip</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0)" class="nav-link">Multitrip

                                                        <span style=" text-align: left; margin-left: 68px; background-color: red; border-radius: 15px; padding: 5px; color: white; ">Working</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0)" class="nav-link">All Inclusive

                                                        <span style=" text-align: left; margin-left: 50px; background-color: red; border-radius: 15px; padding: 5px; color: white; ">Working</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('life-insurance') }}" class="nav-link dropdown-toggle">
                                            Insurance 
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('life-insurance') }}" class="nav-link">Whole Life Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('term-life-insurance') }}" class="nav-link">Term Life Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('desability') }}" class="nav-link">Desability</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('critical-illness') }}" class="nav-link">Critical Illness Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('health-insurance') }}" class="nav-link">Health Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('nonmedical') }}" class="nav-link">Non Medical Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('rrsp') }}" class="nav-link">RRSP Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('resp') }}" class="nav-link">RESP Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('mortgage') }}" class="nav-link">Mortgage Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('tfsa') }}" class="nav-link">TFSA Insurance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('aboutus') }}" class="nav-link dropdown-toggle">
                                            About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('product') }}" class="nav-link dropdown-toggle">
                                            Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('blogs') }}" class="nav-link">Blogs</a>
                                </li>
                                
                                @if(Auth::check()) 

                                    @if(Auth::user()->user_type == 'admin')
                                        <li class="nav-item">
                                            <a href="{{ url('admin/dashboard')}}" class="btn btn-lg login-btn">
                                            Admin dashboard 
                                            </a>
                                        </li>
                                    @else
                                      <li class="dropdown ml-2">
                                            <a class="rounded-circle " href="#" role="button" id="dropdownUser"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="avatar avatar-md avatar-indicators avatar-online" style="margin-top: 15px;">

                                                    @if(Auth::user()->profileimage)
                                                    <img width="30" alt="avatar" src="{{ url('public/images') }}/{{ Auth::user()->profileimage  }}" class="rounded-circle">
                                                   @else
                                                   <img width="30" alt="avatar" src="https://st4.depositphotos.com/4329009/19956/v/600/depositphotos_199564354-stock-illustration-creative-vector-illustration-default-avatar.jpg" class="rounded-circle">
                                                   @endif
                                                </div>
                                            </a>
                                            <div class="dropdown-menu pb-2" aria-labelledby="dropdownUser">
                                                <ul class="">
                                                    <li class="nav-link active">
                                                        <a class=" text-dark" href="#!">
                                                    profile
                                                        </a>
                                                    </li>
                                                    <li class="nav-link">
                                                        <a class=" text-dark" href="{{ url('') }}">
                                                    Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    @endif
                                @else
                                <li class="nav-item">
                                    <a href="{{ url('login')}}" class="btn btn-lg login-btn">
                                    Login 
                                    </a>
                                </li>
                                @endif

                            </ul>
                            <!-- Start Other Option -->
                            <div class="login-signup d-flex">
                            </div>
                            <!-- End Other Option -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>