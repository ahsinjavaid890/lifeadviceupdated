
@php
    $url = request()->segment(count(request()->segments()));
@endphp
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
                                    <a href="{{ url('') }}" class="nav-link @if($url) @else active @endif">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('travel-insurance') }}" class="nav-link dropdown-toggle @if($url == 'travel-insurance') active @endif @if($url == 'super-visa-insurance') active @endif @if($url == 'visitor-insurance') active @endif @if($url == 'student-insurance') active @endif">
                                         Travel Insurance
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('travel-insurance') }}" class="nav-link @if($url == 'travel-insurance') activesubnav @endif">Travel Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('super-visa-insurance') }}" class="nav-link @if($url == 'super-visa-insurance') activesubnav @endif">Super Visa Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('visitor-insurance') }}" class="nav-link @if($url == 'visitor-insurance') activesubnav @endif">Visitor Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('student-insurance') }}" class="nav-link @if($url == 'student-insurance') activesubnav @endif">Student Insurance</a>
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
                                    <a href="{{ url('life-insurance') }}" class="nav-link dropdown-toggle  @if($url == 'life-insurance') active @endif @if($url == 'term-life-insurance') active @endif @if($url == 'desability') active @endif @if($url == 'critical-illness') active @endif  @if($url == 'health-insurance') active @endif  @if($url == 'nonmedical') active @endif  @if($url == 'rrsp') active @endif  @if($url == 'resp') active @endif  @if($url == 'mortgage') active @endif  @if($url == 'tfsa') active @endif">
                                            Insurance 
                                            <i class="bx bx-chevron-down"></i>
                                        </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('life-insurance') }}" class="nav-link @if($url == 'life-insurance') activesubnav @endif">Whole Life Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('term-life-insurance') }}" class="nav-link @if($url == 'term-life-insurance') activesubnav @endif">Term Life Insurance</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="{{ url('desability') }} " class="nav-link @if($url == 'desability') activesubnav @endif">Desability</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('critical-illness') }}" class="nav-link @if($url == 'critical-illness') activesubnav @endif">Critical Illness Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('health-insurance') }}" class="nav-link @if($url == 'health-insurance') activesubnav @endif">Health Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('nonmedical') }}" class="nav-link @if($url == 'nonmedical') activesubnav @endif">Non Medical Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('rrsp') }}" class="nav-link @if($url == 'rrsp') activesubnav @endif">RRSP Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('resp') }}" class="nav-link @if($url == 'resp') activesubnav @endif">RESP Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('mortgage') }}" class="nav-link @if($url == 'mortgage') activesubnav @endif">Mortgage Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('tfsa') }}" class="nav-link @if($url == 'tfsa') activesubnav @endif">TFSA Insurance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('aboutus') }}" class="nav-link dropdown-toggle @if($url == 'aboutus') active @endif" >
                                            About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('product') }}" class="nav-link dropdown-toggle @if($url == 'product') active @endif">
                                            Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('blogs') }}" class="nav-link @if($url == 'blogs') active @endif">Blogs</a>
                                </li>
                                
                                @if(Auth::check()) 
                                    @if(Auth::user()->user_type == 'admin')
                                        <li class="nav-item">
                                            <a href="{{ url('admin/dashboard')}}" class="btn btn-lg login-btn">
                                            Admin dashboard 
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ url('profile')}}" class="btn btn-lg login-btn">
                                                My Account
                                            </a>
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