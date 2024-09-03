<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css1/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css1/style.default.css') }}" id="theme-stylesheet">
    <link rel="stylesheet" href="css1/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
    <div class="page-holder bg-light">
        <!-- navbar-->
        @include('header')
        <!-- Modal -->
    <!-- Modal -->
  
        <section class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <!-- PRODUCT SLIDER-->
                        <div class="row m-sm-0">
                            <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                                <div class="swiper product-slider-thumbs">
                                    <div class="swiper-wrapper">
                                        @if(isset($product['attributes']['image']) && is_array($product['attributes']['image']))
                                            @foreach($product['attributes']['image'] as $image)
                                            @php
                                                $imageUrl = is_array($image) && isset($image['original']) ? $image['original'] : (is_string($image) ? $image : 'default_image.jpg');
                                            @endphp
                                            <div class="swiper-slide h-auto swiper-thumb-item mb-3">
                                                <img class="w-100" src="{{ htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8') }}" alt="..." data-product-id="{{ $product['id'] }}">
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 order-1 order-sm-2">
                                <div class="swiper product-slider">
                                    <div class="swiper-wrapper">
                                        @if(isset($product['attributes']['image']) && is_array($product['attributes']['image']))
                                        <div class="swiper-slide h-auto swiper-thumb-item mb-3">
                                            <img class="w-100" 
                                                src="{{ htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8') }}" 
                                                alt="..." 
                                                data-product-id="{{ $product['id'] }}">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PRODUCT DETAILS-->
                    <div class="col-lg-6">
                        <ul class="list-inline mb-2 text-sm">
                            @for($i = 1; $i <= 5; $i++)
                                <li class="list-inline-item m-0">
                                    <i class="fas fa-star {{ $i <= ($product['attributes']['rating'] ?? 0) ? 'text-warning' : 'text-muted' }}"></i>
                                </li>
                            @endfor
                        </ul>
                        <h1>{{ htmlspecialchars($product['attributes']['name'] ?? 'Nom du produit', ENT_QUOTES, 'UTF-8') }}</h1>
                        <p class="text-muted lead">{{ htmlspecialchars($product['attributes']['retailPrice'] ?? '0.00', ENT_QUOTES, 'UTF-8') }} €</p>
                        <p class="text-sm mb-4">{{ htmlspecialchars($product['attributes']['colorway'] ?? 'Couleur non spécifiée', ENT_QUOTES, 'UTF-8') }}</p>
                        <div class="row align-items-stretch mb-4">
                            <div class="col-sm-5 pr-sm-0">
                                <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                                    <span class="small text-uppercase text-gray mr-4 no-select">Quantité</span>
                                    <div class="quantity">
                                        <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                        <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                        <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 pl-sm-0">
                                <a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="{{ route('cart.add', ['id' => $product['id'] ?? 0]) }}">Ajouter au panier</a>
                            </div>
                        </div>
                        <a class="text-dark p-0 mb-4 d-inline-block" href="#!"><i class="far fa-heart me-2"></i>Ajouter aux favoris</a><br>
                        <ul class="list-unstyled small d-inline-block">
                            <li class="px-3 py-2 mb-1 bg-white text-muted">
                                <strong class="text-uppercase text-dark">Categorie:</strong><a class="reset-anchor ms-2" href="#!">{{ htmlspecialchars($product['attributes']['gender'] ?? 'Non spécifié', ENT_QUOTES, 'UTF-8') }}</a>
                            </li>
                            <li class="px-3 py-2 mb-1 bg-white text-muted">
                                <strong class="text-uppercase text-dark">Date de sortie:</strong><a class="reset-anchor ms-2" href="#!">{{ htmlspecialchars($product['attributes']['releaseDate'] ?? 'Non spécifié', ENT_QUOTES, 'UTF-8') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- DETAILS TABS-->
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Commentaires</a></li>
                </ul>
                <div class="tab-content mb-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="p-4 p-lg-5 bg-white">
                            <h6 class="text-uppercase">Description du produit</h6>
                            <p class="text-muted text-sm mb-0">{{ htmlspecialchars($product['attributes']['story'] ?? 'Pas de description longue disponible', ENT_QUOTES, 'UTF-8') }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="p-4 p-lg-5 bg-white">
                            <div class="row">
                                <div class="col-lg-8">
                                    @if(isset($product['attributes']['reviews']) && is_array($product['attributes']['reviews']))
                                        @foreach($product['attributes']['reviews'] as $review)
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-circle" src="{{ htmlspecialchars($review['user']['avatar'] ?? 'default_avatar.jpg', ENT_QUOTES, 'UTF-8') }}" alt="" width="50"/>
                                                </div>
                                                <div class="ms-3 flex-shrink-1">
                                                    <h6 class="mb-0 text-uppercase">{{ htmlspecialchars($review['user']['name'] ?? 'Utilisateur', ENT_QUOTES, 'UTF-8') }}</h6>
                                                    <p class="small text-muted mb-0 text-uppercase">{{ \Carbon\Carbon::parse($review['created_at'] ?? now())->format('d M Y') }}</p>
                                                    <ul class="list-inline mb-1 text-xs">
                                                        @for($i = 1; $i <= 5; $i++)
                                                            <li class="list-inline-item m-0">
                                                                <i class="fas fa-star {{ $i <= ($review['rating'] ?? 0) ? 'text-warning' : 'text-muted' }}"></i>
                                                            </li>
                                                        @endfor
                                                    </ul>
                                                    <p class="text-sm mb-0 text-muted">{{ htmlspecialchars($review['comment'] ?? 'Aucun commentaire', ENT_QUOTES, 'UTF-8') }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Aucun commentaire disponible.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('footer')
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/nouislider/nouislider.min.js"></script>
        <script src="vendor/swiper/swiper-bundle.min.js"></script>
        <script src="js1/front.js"></script>
        <script>
            function injectSvgSprite(path) {
                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                    var div = document.createElement("div");
                    div.className = 'd-none';
                    div.innerHTML = ajax.responseText;
                    document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
</body>
</html>
