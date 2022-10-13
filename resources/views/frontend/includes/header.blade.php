<header class="header-area header-area-five fixed-top">
    <!-- Start Navbar Area -->
    <div class="nav-area nev-style-five">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ url('') }}" class="logo">
                    <img src="https://www.lifeadvice.ca/images/brand.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('') }}">
                            <img src="https://www.lifeadvice.ca/images/brand.png" alt="Logo">
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
                                            <a href="#" class="nav-link dropdown-toggle">
                                                Insurance For Candians
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="log-in.html" class="nav-link">Single Trip</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sign-in.html" class="nav-link">Multitrip</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="recover-password.html" class="nav-link">All Inclusive</a>
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
                                            <a href="{{ url('disability-insurance') }}" class="nav-link">Desability</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('critical-insurance') }}" class="nav-link">Critical Illness Insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('health-insurance') }}" class="nav-link">Health-Insurance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('aboutus') }}" class="nav-link dropdown-toggle">
                                            About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('products') }}" class="nav-link dropdown-toggle">
                                            Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('blogs') }}" class="nav-link">Blogs</a>
                                </li>
                            </ul>
                            <!-- Start Other Option -->
                            <a href="login" class="btn btn-lg login-btn">
                                Login 
                            </a>
                            <a href="sign-up" class="btn btn-lg mx-3 sign-up">
                                Sign Up
                            </a>
                            <!-- End Other Option -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>