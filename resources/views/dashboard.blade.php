<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Boutique | Ecommerce SHOEZER</title>
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
  <link rel="stylesheet" href="css1/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   
  <style>
    /* Style pour les notifications Toastr */
    .toast-success {
        background-color: #dcb14a; /* Couleur de fond */
        color: white; /* Couleur du texte */
    }
    .toast-error {
        background-color: #dcb14a; /* Couleur de fond pour les erreurs */
        color: white; /* Couleur du texte */
    }
    .toast-title {
        font-weight: bold;
    }
.popup {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    position: relative;
    width: 300px;
}

.popup-content .close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
}

.popup-content .close:hover {
    color: #ff0000;
}

.button-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

#claim-offer {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #e5c700; 
    color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px; 
}

#claim-offer:hover {
    background-color: #e5c700; 
}

#close-popup {
    padding: 10px 20px;
    font-size: 16px;
    background-color: black; 
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#close-popup:hover {
    background-color: #333333; 
}
</style>

</head>

<body>
  <div class="page-holder">
    <!-- navbar-->
    @include('header')
    <div class="container">
      <!-- HERO SECTION-->
      <section class="py-5 bg-light">
        <div class="container">
          <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
              <h1 class="h2 text-uppercase mb-0">DASHBOARD</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                  <li class="breadcrumb-item"><a class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container p-0">
          <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
           
                <!-- Brands -->
                @if (!empty($brands))
                    <h5 class="text-uppercase mb-4">Marques</h5>
                    <div class="py-2 px-4 bg-dark text-white mb-3">
                        <strong class="small text-uppercase fw-bold">Marques</strong>
                    </div>
                    <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                        @foreach ($brands as $brand)
                            <li class="mb-2"><a class="reset-anchor" href="#!">{{ $brand }}</a></li>
                        @endforeach
                    </ul>
                @endif

                <!-- Colors -->
                @if (!empty($colors))
                    <h5 class="text-uppercase mb-4">Couleurs</h5>
                    <div class="py-2 px-4 bg-dark text-white mb-3">
                        <strong class="small text-uppercase fw-bold">Couleurs</strong>
                    </div>
                    <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                        @foreach ($colors as $color)
                            <li class="mb-2"><a class="reset-anchor" href="#!">{{ $color }}</a></li>
                        @endforeach
                    </ul>
                @endif

                <!-- Silhouettes -->
                @if (!empty($silhouettes))
                    <h5 class="text-uppercase mb-4">Silhouettes</h5>
                    <div class="py-2 px-4 bg-dark text-white mb-3">
                        <strong class="small text-uppercase fw-bold">Silhouettes</strong>
                    </div>
                    <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                        @foreach ($silhouettes as $silhouette)
                            <li class="mb-2"><a class="reset-anchor" href="#!">{{ $silhouette }}</a></li>
                        @endforeach
                    </ul>
                @endif

                <!-- Genders -->
                @if (!empty($genders))
                    <h5 class="text-uppercase mb-4">Genres</h5>
                    <div class="py-2 px-4 bg-dark text-white mb-3">
                        <strong class="small text-uppercase fw-bold">Genres</strong>
                    </div>
                    <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                        @foreach ($genders as $gender)
                            <li class="mb-2"><a class="reset-anchor" href="#!">{{ $gender }}</a></li>
                        @endforeach
                    </ul>
                @endif
              <h5 class="text-uppercase mb-4">DECONNEXION</h5> 

              @if(Route::has('login'))
              @auth
              <div class="py-2 px-4">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-button class="py-2 px-4 bg-dark text-white mb-3" href="logout">
                  <strong class="small text-uppercase fw-bold">
                    Deconnexion
                    </strong>
                  </x-button>
                </form>
              </div>
              @endauth
              @endif

            </div>
            <!-- SHOP LISTING-->
            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
              <div class="row mb-3 align-items-center">
                <div class="col-lg-6 mb-2 mb-lg-0">
                  <p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>
                </div>
                <div class="col-lg-6">   
                <div class="d-flex align-items-center justify-content-lg-end mb-0">               
                   <!-- Filter Dropdown -->
                  <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th-large"></i></a></li>
                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th"></i></a></li>
                    <li class="list-inline-item">
                      <select class="selectpicker" data-customclass="form-control form-control-sm">
                        <option value>Filtrer par </option>
                        <option value="low-high">Prix : Faible à Elevé </option>
                        <option value="high-low">Prix : Elevé à Faible </option>
                      </select>
                    </li>
                    <li class="list-inline-item ms-3">
                    <div class="input-group">
                      <input type="text" name="query" id="searchInput" class="form-control form-control-sm" placeholder="Recherche..." value="{{ request('query') }}">
                      <span class="input-group-text bg-dark text-white"><i class="fas fa-search"></i></span>
                    </div>
                  </li>
                  </ul>
                
                </div>
              </div> 
          </div>        

          <div class="row" id="productContainer">
          @if(isset($products) && is_array($products))
              @foreach ($products as $product)
                  @php
                      $attributes = $product['attributes'] ?? [];
                      $image = isset($attributes['image']['original']) ? $attributes['image']['original'] : 'default_image.jpg';
                      $productId = $product['id'] ?? null;
                  @endphp
                  <div class="col-md-4">
                      <div class="card mb-4">
                          <a href="{{ route('products.show', ['id' => $productId]) }}">
                              <img src="{{ htmlspecialchars($image, ENT_QUOTES, 'UTF-8') }}" class="card-img-top" alt="{{ htmlspecialchars($attributes['name'] ?? 'Nom indisponible', ENT_QUOTES, 'UTF-8') }}">
                          </a>
                          <div class="card-body">
                              <h5 class="card-title">{{ htmlspecialchars($attributes['silhouette'] ?? 'Nom indisponible', ENT_QUOTES, 'UTF-8') }}</h5>
                              <p class="card-text">
                                  <strong>Prix:</strong> {{ htmlspecialchars($attributes['retailPrice'] ?? 'Prix non disponible', ENT_QUOTES, 'UTF-8') }} €
                              </p>
                              <center>
                                  <ul class="mb-0 list-inline">
                                      <li class="list-inline-item m-0 p-0">
                                          <a class="btn btn-sm btn-outline-dark" href="#!">
                                              <i class="far fa-heart"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item m-0 p-0">
                                          <a class="btn btn-sm btn-dark add-to-cart" data-product-id="{{ $productId }}" data-quantity="1">
                                              Ajouter au panier
                                          </a>
                                      </li>
                                      <li class="list-inline-item mr-0">
                                          <a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"
                                              data-image="{{ htmlspecialchars($image, ENT_QUOTES, 'UTF-8') }}"
                                              data-name="{{ htmlspecialchars($attributes['name'] ?? 'Nom indisponible', ENT_QUOTES, 'UTF-8') }}"
                                              data-price="{{ htmlspecialchars($attributes['retailPrice'] ?? 'Prix non disponible', ENT_QUOTES, 'UTF-8') }}"
                                              data-description="{{ htmlspecialchars($attributes['description'] ?? 'Description pas disponible', ENT_QUOTES, 'UTF-8') }}"
                                              data-rating="{{ $attributes['rating'] ?? 0 }}">
                                              <i class="fas fa-expand"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </center>
                          </div>
                      </div>
                  </div>
              @endforeach
          @else
              <p>Aucun produit disponible pour le moment.</p>
          @endif
      </div>

               <!-- Modal -->
              <div class="modal fade" id="productView" tabindex="-1" aria-labelledby="productViewLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content overflow-hidden border-0">
                    <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-0">
                      <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0">
                          <a class="glightbox product-view d-block h-100 bg-cover bg-center" href="#" id="modalImage"></a>
                        </div>
                        <div class="col-lg-6">
                          <div class="p-4 my-md-4">
                            <ul id="modalRating" class="list-inline mb-2">
                              <!-- Rating will be dynamically populated -->
                            </ul>
                            <h2 id="modalName" class="h4"></h2>
                            <p id="modalPrice" class="text-muted"></p>
                            <p id="modalDescription" class="text-sm mb-4"></p>
                            <div class="row align-items-stretch mb-4 gx-0">
                              <div class="col-sm-7">
                                <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                                  <span class="small text-uppercase text-gray mr-4 no-select">Quantité</span>
                                  <div class="quantity">
                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                    <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-5">
                                <a class="btn btn-dark d-flex align-items-center justify-content-center w-100 h-100" href="cart"><i class="fas fa-cart-plus me-2"></i>Ajouter</a>
                              </div>
                            </div>
                            <a class="btn btn-link text-dark p-0" href="#!"><i class="far fa-heart me-2"></i>Favoris</a>
                            <a class="btn btn-link text-dark p-0" href="#!"><i class="fas fa-share-alt me-2"></i>Partager</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pop-up HTML -->
              <div class="popup" id="promo-popup">
                  <div class="popup-content">
                      <!-- Icône de fermeture en haut à droite -->
                      <span class="close">&times;</span>
                      <h5>Promotion Spéciale !</h5>
                      <p>Profitez de 30% de réduction sur votre premier achat avec le code <strong>PROMO30</strong> !</p>
                      <p>Offre valable jusqu'au 30 septembre 2024.</p>
                      <!-- Conteneur pour les boutons -->
                      <div class="button-container">
                          <button id="claim-offer">Profiter</button>
                          <button id="close-popup">Fermer</button>
                      </div>
                  </div>
              </div>

              <!-- PAGINATION-->
              <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center justify-content-lg-end">
        <!-- Bouton Précédent -->
        <li class="page-item mx-1 {{ $currentPage == 1 ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $currentPage > 1 ? route('products.index', ['page' => $currentPage - 1]) : '#!' }}" aria-label="Previous">
                <span aria-hidden="true">«</span>
            </a>
        </li>

        <!-- Pages -->
        @for ($i = 1; $i <= $totalPages; $i++)
            <li class="page-item mx-1 {{ $currentPage == $i ? 'active' : '' }}">
                <a class="page-link" href="{{ route('products.index', ['page' => $i]) }}">{{ $i }}</a>
            </li>
        @endfor

        <!-- Bouton Suivant -->
        <li class="page-item ms-1 {{ $currentPage == $totalPages ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $currentPage < $totalPages ? route('products.index', ['page' => $currentPage + 1]) : '#!' }}" aria-label="Next">
                <span aria-hidden="true">»</span>
            </a>
        </li>
    </ul>
</nav>

            </div>
          </div>
        </div>
      </section>
    </div>
    @include('footer')

    <!-- JavaScript files-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js1/front.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Nouislider Config-->
    <script>
      var range = document.getElementById('range');
      noUiSlider.create(range, {
        range: {
          'min': 0,
          'max': 2000
        },
        step: 5,
        start: [100, 1000],
        margin: 300,
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
          to: function(value) {
            return '$' + value;
          },
          from: function(value) {
            return value.replace('', '');
          }
        }
      });
    </script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
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
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      //modal de details d'un produit 
        document.addEventListener('DOMContentLoaded', function () {
          var modalImage = document.getElementById('modalImage');
          var modalName = document.getElementById('modalName');
          var modalPrice = document.getElementById('modalPrice');
          var modalDescription = document.getElementById('modalDescription');
          var modalRating = document.getElementById('modalRating');

          document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function (element) {
            element.addEventListener('click', function () {
              // Lire les valeurs des attributs data- du bouton cliqué
              var image = element.getAttribute('data-image');
              var name = element.getAttribute('data-name');
              var price = element.getAttribute('data-price');
              var description = element.getAttribute('data-description');
              var rating = parseInt(element.getAttribute('data-rating'));

              // Mettre à jour le contenu du modal
              modalImage.href = image;
              modalImage.style.backgroundImage = 'url(' + image + ')';
              modalName.textContent = name;
              modalPrice.textContent = price;
              modalDescription.textContent = description;

              // Mettre à jour les étoiles de la note
              modalRating.innerHTML = '';
              modalPrice.textContent = price + ' €';
              for (var i = 0; i < rating; i++) {
                var star = document.createElement('li');
                star.classList.add('list-inline-item');
                star.innerHTML = '<i class="fas fa-star text-warning"></i>';
                modalRating.appendChild(star);
              }
            });
          });
        });
        </script>
      
        <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Script d'ajout au panier
        const addToCartButtons = document.querySelectorAll('.add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function () {
                console.log('Add to cart button clicked'); // Débogage
                const productId = this.getAttribute('data-product-id');
                const quantity = this.getAttribute('data-quantity');

                fetch('{{ route('cart.add') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: quantity
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Add to cart response:', data); 
                    if (data.success) {
                        toastr.success(data.message, 'Succès', {
                            positionClass: 'toast-bottom-right', 
                            timeOut: 3000 // Durée d'affichage de la notification
                        });
                    } else {
                        toastr.error(data.message, 'Erreur', {
                            positionClass: 'toast-bottom-right',
                            timeOut: 3000
                        });
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });

        // Script de recherche
        $('#searchInput').on('input', function () {
            var query = $(this).val();
            console.log('Search input:', query); // Débogage

            $.ajax({
                url: '{{ route("products.search") }}',
                method: 'GET',
                data: {
                    query: query
                },
                success: function (response) {
                    console.log('Search response:', response); // Débogage
                    $('#productContainer').html(response.html);
                },
                error: function () {
                    console.error('Erreur lors de la recherche.');
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    // Vérifier si l'utilisateur a déjà vu le pop-up
    var hasSeenPopup = sessionStorage.getItem('hasSeenPromoPopup');

    // Debug: Afficher dans la console si l'utilisateur a vu le pop-up
    console.log('hasSeenPromoPopup:', hasSeenPopup);

    // Si l'utilisateur n'a pas vu le pop-up, l'afficher après 2 secondes
    if (!hasSeenPopup || hasSeenPopup === 'false') {
        setTimeout(function () {
            document.getElementById('promo-popup').style.display = 'flex';
        }, 2000);

        // Stocker l'information dans le sessionStorage pour ne plus afficher le pop-up
        sessionStorage.setItem('hasSeenPromoPopup', 'true');
        console.log('Pop-up affiché et hasSeenPromoPopup mis à jour');
    } else {
        console.log('Pop-up déjà vu, pas d\'affichage');
    }

    // Gérer la fermeture du pop-up avec le bouton "Fermer"
    document.getElementById('close-popup').addEventListener('click', function () {
        document.getElementById('promo-popup').style.display = 'none';
    });

    // Gérer la fermeture du pop-up avec l'icône de fermeture
    document.querySelector('.popup .close').addEventListener('click', function () {
        document.getElementById('promo-popup').style.display = 'none';
    });

    // Gérer le bouton "Profiter"
    document.getElementById('claim-offer').addEventListener('click', function() {
        toastr.success('Vous avez choisi de profiter de la promotion de 30% !', 'Succès', {
            positionClass: 'toast-bottom-right',
            timeOut: 3000
        });
        document.getElementById('promo-popup').style.display = 'none';
    });
});

</script>
  </div>
  </div>
</body>
</html>