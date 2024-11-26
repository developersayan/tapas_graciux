    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg   navbar-light sticky-top px-4 px-lg-5" style="background: #27221F;color: white;">
        <a href="{{route('home.page')}}" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img class="img-fluid me-3" src="{{asset('public/logo.png')}}" alt=""></h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <span class="navbar-toggler-icon">{{-- <i class="fas fa-bars" style="color:#2A8DAC !important; font-size:28px;"></i> --}}<img src="{{asset('public/hamburger.png')}}" style="width: 100%;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav   pe-4 py-3 py-lg-0" style="margin-left:auto;">
                <a href="{{route('home.page')}}" class="nav-item nav-link ">MENU</a>
                <a href="{{route('product.page')}}" class="nav-item nav-link ">PRODUCT</a>
                <a href="{{route('blog.page')}}" class="nav-item nav-link ">BLOG</a>
                <a href="{{route('contact.page')}}" class="nav-item nav-link ">CONTACT</a>

                <a class="btn btn-square rounded-circle nav-item nav-link text-primary " href="https://www.facebook.com/profile.php?id=61563094552048&mibextid=rS40aB7S9Ucbxw6v" target="_blank"><i class="fab fa-facebook-f"></i></a>
                
                <a class="btn btn-square rounded-circle nav-item nav-link text-primary " href="https://www.instagram.com/gracieuxadventurehub?igsh=MTJwdGYwdXg4OGY1Yg==" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->