<header class="header bg-white">
            <div class="container px-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand"><span class="fw-bold text-uppercase text-dark">SNEAKERS</span></a>
                    <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link" href="dashboard">Achats</a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="/">Home</a>
                                <a class="dropdown-item border-0 transition-link" href="dashboard">Categories</a>
                                <a class="dropdown-item border-0 transition-link" href="detail">Details produits</a>
                                <a class="dropdown-item border-0 transition-link" href="cart">Panier d'Achats</a>
                                <a class="dropdown-item border-0 transition-link" href="checkout">Passer Commande</a></div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="cart"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Panier<small class="text-gray fw-normal" id="cart-count"> (@php echo $totalQuantity @endphp)</small></a></li>
                            <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i>Favoris<small class="text-gray fw-normal"> (0)</small></a></li>
                            <li class="nav-item">
                                    @if (Route::has('login'))
                                    @auth
                                    <a class="nav-link" href="{{ url('/dashboard') }}">
                                        <i class="fas fa-home me-1 text-gray fw-normal"></i>dashboard
                                    </a>
                                    @else
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <i class="fas fa-user me-1 text-gray fw-normal"></i>Connexion
                                    </a>
                                    @endauth
                                    @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>