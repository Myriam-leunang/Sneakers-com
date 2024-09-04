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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/epices.png)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
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
                <h1 class="h2 text-uppercase mb-0">Panier</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Panier</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <h2 class="h5 text-uppercase mb-4">Panier d'achats</h2>
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table class="table text-nowrap">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Produit</strong></th>                      
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Nom</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Prix</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Quantité</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Total</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase"></strong></th>
                    </tr>
                  </thead>

                  <tbody class="border-0">
    @if(isset($cart) && is_array($cart))
        @foreach($cart as $productId => $item)
            @php
            $image = $item['image'] ?? 'default_image.jpg';
            $id = $item['id'] ?? $productId; // Utilisez $productId si 'id' est manquant
            @endphp
            <tr>
                <th class="ps-0 py-3 border-light" scope="row">
                    <div class="d-flex align-items-center">
                        <a class="reset-anchor d-block animsition-link" href="{{ route('products.show', ['id' => $id]) }}">
                        <img src="{{ htmlspecialchars($image, ENT_QUOTES, 'UTF-8') }}" class="card-img-top" style="width: 80%;">
                        </a>
                    </div>
                </th>
                <td class="p-3 align-middle border-light">
                <a class="reset-anchor animsition-link" href="{{ route('products.show', ['id' => $id]) }}" style="display: block; max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $item['name'] }}</a>
                </td>
                <td class="p-3 align-middle border-light">
                    <p class="mb-0 small">{{ $item['price'] }} €</p>
                </td>
                <td class="p-3 align-middle border-light">
                                                    <div class="border d-flex align-items-center justify-content-between px-3">
                                                        <span class="small text-uppercase text-gray headings-font-family">Quantité</span>
                                                        <div class="quantity">
                                                            <button class="dec-btn p-0" onclick="updateQuantity('{{ $productId }}', -1)"><i class="fas fa-caret-left"></i></button>
                                                            <input class="form-control form-control-sm border-0 shadow-0 p-0 quantity-input" type="text" value="{{ $item['quantity'] }}" data-price="{{ $item['price'] }}" readonly/>
                                                            <button class="inc-btn p-0" onclick="updateQuantity('{{ $productId }}', 1)"><i class="fas fa-caret-right"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                <td class="p-3 align-middle border-light">
                    <p class="mb-0 small">{{ $item['price'] * $item['quantity'] }} €</p>
                </td>
                <td class="p-3 align-middle border-light"><a class="reset-anchor" href="#!"><i class="fas fa-trash-can small text-muted"></i></a></td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="5" class="text-center">Votre panier est vide</td>
        </tr>
    @endif
</tbody>
                </table>
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-link p-0 text-dark btn-sm" href="dashboard"><i class="fas fa-long-arrow-alt-left me-2"></i>Continuer les achats</a></div>
                  <div class="col-md-6 text-md-end"><a class="btn btn-outline-dark btn-sm" href="checkout">Procéder au paiement<i class="fas fa-long-arrow-alt-right ms-2"></i></a></div>
                </div>
              </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Somme totale du panier</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Sous-total</strong><span class="text-muted small">{{ $subtotal }} €</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span>{{ $subtotal }} €</span></li>
                    <br>
                    <li>
                      <form action="#">
                        <div class="input-group mb-0">
                          <input class="form-control" type="text" placeholder="Entrer votre coupon">
                          <button class="btn btn-dark btn-sm w-100" type="submit"> <i class="fas fa-gift me-2"></i>Appliquer coupon</button>
                        </div>
                      </form>
                    </li>
                    <br>
                    <li>
                          <button class="btn btn-dark btn-sm w-100" type="submit" href="checkout"><i class="fas fa-credit-card me-2"></i>Procéder au paiement</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Nouislider Config-->
    <script>
      var range = document.getElementById('range');
      noUiSlider.create(range, {
        range: {
          min: 0,
          max: 2000,
        },
        start: [500, 1500],
        connect: true,
        step: 1,
        tooltips: [true, true],
        format: {
          to: function (value) {
            return value + ' €';
          },
          from: function (value) {
            return value.replace(' €', '');
          }
        }
      });
    </script>
    <!-- Nouislider Config-->
    <script>
        var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                min: 0,
                max: 2000,
            },
            start: [500, 1500],
            connect: true,
            step: 1,
            tooltips: [true, true],
            format: {
                to: function (value) {
                    return value + ' €';
                },
                from: function (value) {
                    return value.replace(' €', '');
                }
            }
        });

        function updateQuantity(productId, change) {
            const row = document.querySelector(`tr[data-product-id="${productId}"]`);
            const quantityInput = row.querySelector('.quantity-input');
            const price = parseFloat(quantityInput.getAttribute('data-price'));
            let quantity = parseInt(quantityInput.value);

            quantity += change;

            if (quantity < 1) {
                quantity = 1;
            }

            quantityInput.value = quantity;
            const totalPrice = row.querySelector('.total-price');
            totalPrice.textContent = (price * quantity) + ' €';

            updateSubtotal();
        }

        function removeItem(productId) {
            const row = document.querySelector(`tr[data-product-id="${productId}"]`);
            row.remove();
            updateSubtotal();
        }

        function updateSubtotal() {
            let subtotal = 0;
            document.querySelectorAll('.total-price').forEach(priceElement => {
                subtotal += parseFloat(priceElement.textContent.replace(' €', ''));
            });

            document.getElementById('subtotal').textContent = subtotal + ' €';
            document.getElementById('total').textContent = subtotal + ' €';
        }
    </script>
  </body>
</html>
