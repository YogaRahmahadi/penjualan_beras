    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Toko Barokah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/user">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/order">Transaksi</a></li>
                    <li class="nav-item dropdown">
                        {{-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul> --}}
                    </li>
                </ul>
                <form class="d-flex">
                    {{-- <form class="d-flex0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form> --}}
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        <a href="/cart" class="btn-outline-dark">Cart</a>
                        @auth
                            <span class="badge bg-dark text-white ms-1 rounded-pill">{{ \App\Http\Controllers\HomeController::cartCount() }}</span>
                        @endauth
                    </button>
                    @auth
                        <a href="/keluar" class="btn btn-outline-dark">LogOut</a>
                    @else
                        <a href="/login" class="btn btn-outline-dark">Login</a>
                    @endauth
                </form>
            </div>
            {{-- <li>
                <a class="profile-pic" href="/pelanggan">
                    <img src="{{ asset('assets/plugins/images/users/user.jpg') }}" alt="user-img" width="36"
                    class="img-circle"><span class="text-white font-medium">{{ Auth::user()->name }}</span></a>
            </li> --}}
        </div>
        {{-- <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li>
                    <a class="profile-pic" href="/pelanggan">
                        <img src="{{ asset('assets/plugins/images/users/user.jpg') }}" alt="user-img" width="36"
                        class="img-circle"><span class="text-white font-medium">{{ Auth::user()->name }}</span></a>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div> --}}
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Toko Barokah</h1>
                <p class="lead fw-normal text-white-50 mb-0">Menjual bermacam-macam beras dengan harga terjangkau</p>
            </div>
        </div>
    </header>