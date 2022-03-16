<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="header-contact">
                        <li>
                            <span>Call :</span>
                           +23 45 5467
                        </li>
                        <li>
                            <span>Email :</span>
                            info@example.com
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header-right float-right">
                        <div class="header-socials">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!-- Main Menu Start -->
    <div class="site-navigation main_menu menu-2" id="mainmenu-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/front-assets/images/logo-dark.png') }}" alt="Edutim" class="img-fluid">
                </a>

                <!-- Toggler -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarMenu">

                    <div class="category-menu d-none d-lg-block">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-grip-horizontal"></i>Categoris
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbar3">
                                
                                @foreach($categories as $key => $category)
                                    <a class="dropdown-item " href="{{ $category->slug }}">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <form action="#" class="header-form">
                        <input type="text" class="form-control" placeholder="search">
                        <i class="fa fa-search"></i>
                    </form> 
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a href="{{ url('/') }}" class="nav-link js-scroll-trigger">
                                Home
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('about') }}" class="nav-link js-scroll-trigger">
                                About
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('courses') }}" class="nav-link js-scroll-trigger">
                                Courses
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('blog') }}" class="nav-link js-scroll-trigger">
                                Blog
                            </a>
                        </li>
                        
                        <li class="nav-item ">
                            <a href="{{ route('contact') }}" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>
                   
                </div> <!-- / .navbar-collapse -->
            </div> <!-- / .container -->
        </nav>
    </div>
</header>