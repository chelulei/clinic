<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-4 header-top-left">

                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right">
                    <a href="#" class="primary-btn text-uppercase">Book Appointment</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('img/logo.png')}}" alt="Norsu" title="Norsu" />
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link login" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
