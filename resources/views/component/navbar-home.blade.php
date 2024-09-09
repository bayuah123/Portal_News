<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header">
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo (Kiri) -->
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('home\img\logo\logo wini2.png') }}" style="width: 150px;" alt=""></a>
                            </div>
                        </div>

                        <!-- Main Menu (Tengah) -->
                        <div class="col-xl-6 col-lg-6 col-md-4">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation" class="d-flex justify-content-center">
                                        <li><a href="/">Beranda</a></li>
                                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                        <li><a href="{{ route('categories') }}">Kategori</a></li>

                                        @auth
                                            <li>
                                                <a href="{{ route('dashboard') }}">
                                                    <i class="fas fa-sign-in-alt"></i> Dashboard
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}">
                                                    <i class="fas fa-sign-in-alt"></i> Login
                                                </a>
                                            </li>
                                        @endauth
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Search and Login (Kanan) -->
                        <div class="col-xl-3 col-lg-3 col-md-4 d-flex justify-content-end align-items-center">
                            <!-- Search Box -->
                            <div class="header-right-btn">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                    </form>
                                </div>
                            </div>
                            <!-- Login Link -->
                            <div class="ml-3">
                                @auth
                                    <a href="{{ route('dashboard') }}">
                                        <i class="fas fa-sign-in-alt"></i> Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">
                                        <i class="fas fa-sign-in-alt"></i> Login
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
