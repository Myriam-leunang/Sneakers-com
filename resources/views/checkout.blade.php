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
    <link rel="stylesheet" href="css1/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
     @include('header')
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0">
                    <a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Commandes</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-dark" href="cart">Panier</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Commandes</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Details de la Facturation</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="#">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="firstName">Nom </label>
                    <input class="form-control form-control-lg" type="text" id="firstName" placeholder="Enter votre nom">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="lastName">Prenom </label>
                    <input class="form-control form-control-lg" type="text" id="lastName" placeholder="Enter votre prenom">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="email">Adresse-email</label>
                    <input class="form-control form-control-lg" type="email" id="email" placeholder="e.g. Jason@example.com">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="phone">Telephone </label>
                    <input class="form-control form-control-lg" type="tel" id="phone" placeholder="e.g. +77 156 77 89">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="company">Nom de compagnie (optionel) </label>
                    <input class="form-control form-control-lg" type="text" id="company" placeholder="Nom de votre compagnie">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="form-label text-sm text-uppercase" for="country">Pays</label>
                    <select class="country" id="country" data-customclass="form-control form-control-lg rounded-0">
                      <option value>Choissisez votre pays</option>
                      <option value>Senegal</option>
                    </select>
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="address">Adresse </label>
                    <input class="form-control form-control-lg" type="text" id="address" placeholder="Votre adresse">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="city">Ville </label>
                    <input class="form-control form-control-lg" type="text" id="city">
                  </div>
                  <div class="col-lg-6">
                    <button class="btn btn-link text-dark p-0 shadow-0" type="button" data-bs-toggle="collapse" data-bs-target="#alternateAddress">
                      <div class="form-check">
                        <input class="form-check-input" id="alternateAddressCheckbox" type="checkbox">
                        <label class="form-check-label" for="alternateAddressCheckbox">Autre adresse de facturation</label>
                      </div>
                    </button>
                  </div>
                  <div class="collapse" id="alternateAddress">
                    <div class="row gy-3">
                      <div class="col-12 mt-4">
                        <h2 class="h4 text-uppercase mb-4">Autre adresse de facturation</h2>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName2">Nom </label>
                        <input class="form-control form-control-lg" type="text" id="firstName2" placeholder="Enter votre nom">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="lastName2">Prenom </label>
                        <input class="form-control form-control-lg" type="text" id="lastName2" placeholder="Enter votre prenom">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="email2">Adresse-email</label>
                        <input class="form-control form-control-lg" type="email" id="email2" placeholder="e.g. Jason@example.com">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="phone2">Phone number </label>
                        <input class="form-control form-control-lg" type="tel" id="phone2" placeholder="e.g. +77 156 77 89">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="form-label text-sm text-uppercase" for="countryAlt">Pays</label>
                        <select class="country" id="countryAlt" data-customclass="form-control form-control-lg rounded-0">
                        <option value>Choissisez votre pays</option>
                      <option value>Senegal</option>
                        </select>
                      </div>
                      <div class="col-lg-12">
                        <label class="form-label text-sm text-uppercase" for="addressalt2">Addresse</label>
                        <input class="form-control form-control-lg" type="text" id="addressalt2" placeholder="Votre adresse">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Passer Commande</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Votre commande</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Viande Hachée</strong><span class="text-muted small">3000 Fc</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Bissap</strong><span class="text-muted small">500 Fc</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span>3500 Fc</span></li>
                  </ul>
                </div>
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
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>