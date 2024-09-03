<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Boutique | Ecommerce Sneakers</title>
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
              <h5 class="text-uppercase mb-4">Categories</h5>
              <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Boissons</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#!">Bissap</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Bouilli</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Jus de Tamarin</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Jus de gingembre</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Jus de goyave</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Jus de mangue</a></li>
              </ul>
              <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Produits laitiers</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#!">Sow</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Ardo</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Fromage</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Lait</a></li>
              </ul>
              <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Epices</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                <li class="mb-2"><a class="reset-anchor" href="#!">Cannelle</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Girofle</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Cannelle</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Herbes</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Curcuma</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Cumin</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Poivre</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Piment</a></li>


              </ul>
              <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Céréaliers &amp; Legumineuses</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#!">Arachides</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Haricots</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Poids</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Lentilles</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Mil</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Maïs</a></li>
              </ul>
              <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Viande &amp; Poissons </strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#!">Volailles</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">bœufs</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Moutons</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Poissons</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Sardines &amp; Thons</a></li>
              </ul>
              <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Fruits &amp; Legumes</strong></div>
              <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor" href="#!">Madd corrosols</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Bananes</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Papayes</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Pasteques</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Melons</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Pamplemousses</a></li>
                <li class="mb-2"><a class="reset-anchor" href="#!">Oranges</a></li>


              </ul>
              @if(Route::has('login'))
              @auth
              <div class="py-2 px-4">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-button class="nav-link" href="logout">Deconnexion
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
                  @if(isset($products['data']) && is_array($products['data']))
                      @foreach ($products['data'] as $product)
                          @php
                              $attributes = $product['attributes'];
                              $image = isset($attributes['image']['original']) ? $attributes['image']['original'] : 'default_image.jpg';
                              $productId = isset($product['id']) ? $product['id'] : null; 
                          @endphp
                          <div class="col-md-4">
                              <div class="card mb-4">
                              <a href="{{ route('products.show', ['id' => $product['id']]) }}">
                                  <img src="{{ htmlspecialchars($image, ENT_QUOTES, 'UTF-8') }}" class="card-img-top" alt="{{ htmlspecialchars($attributes['name'], ENT_QUOTES, 'UTF-8') }}">
                                  </a>
                                  <div class="card-body">
                                      <h5 class="card-title">{{ htmlspecialchars($attributes['name'], ENT_QUOTES, 'UTF-8') }}</h5>
                                      <p class="card-text"><strong>Prix:</strong> {{ htmlspecialchars($attributes['retailPrice'], ENT_QUOTES, 'UTF-8') }} €</p>
                                      <!-- Buttons -->
                                      <center>
                                      <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart">Ajouter au panier</a></li>
                                        <li class="list-inline-item mr-0">
                                          <a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"
                                            data-image="{{ htmlspecialchars($image, ENT_QUOTES, 'UTF-8') }}"
                                            data-name="{{ htmlspecialchars($attributes['name'], ENT_QUOTES, 'UTF-8') }}"
                                            data-price="{{ htmlspecialchars($attributes['retailPrice'], ENT_QUOTES, 'UTF-8') }}"
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
                      <p>Aucun produit disponible.</p>
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

              <!-- PAGINATION-->
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center justify-content-lg-end">
                  <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                  <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                  <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                  <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                  <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
    </div>
    @include('footer')

    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js1/front.js"></script>
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
    <script>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
    $(document).ready(function () {
    // Déclenchement de la recherche dès que l'utilisateur tape dans le champ de recherche
    $('#searchInput').on('input', function () {
        var query = $(this).val();

        $.ajax({
            url: '{{ route("products.search") }}', // L'URL à laquelle la requête doit être envoyée
            method: 'GET',
            data: {
                query: query // Les données à envoyer, ici la valeur de l'input de recherche
            },
            success: function (response) {
                // Met à jour le conteneur des produits avec le HTML renvoyé par le serveur
                $('#productContainer').html(response.html);
            },
            error: function () {
                console.error('Erreur lors de la recherche.');
            }
        });
    });
});

</script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
  </div>
</body>
</html>