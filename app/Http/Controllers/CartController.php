<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $apiService; 

    public function __construct(ApiService $apiService)  
    {
        $this->apiService = $apiService;
    }

    public function index()
{
    $cart = Session::get('cart', []);
    $subtotal = 0;
    //dd($cart); 
    foreach ($cart as $item) {
        $subtotal += $item['price'] * $item['quantity'];
    }

    return view('cart', [
        'cart' => $cart,
        'subtotal' => $subtotal
    ]);
}

    public function detail()
    {
        return view('detail');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function addToCart(Request $request)
{
    // Validation des données
    $request->validate([
        'product_id' => 'required|integer',
        'quantity' => 'required|integer|min:1',
    ]);

    // Récupération des détails du produit via l'API
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity');

    // Appel à l'API pour obtenir les informations du produit
    $product = $this->apiService->getProductById($productId);
    $productData = $product['data'] ?? null;

    if (!$productData) {
        return response()->json(['message' => 'Produit non trouvé!'], 404);
    }

    // Exemple de structure de panier dans la session
    $cart = Session::get('cart', []);

    // Ajout du produit au panier
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity'] += $quantity;
    } else {
        $attributes = $productData['attributes'];
        $cart[$productId] = [
            'id' => $productData['id'], // Assurez-vous que l'ID est bien défini ici
            'name' => $attributes['name'],
            'price' => $attributes['retailPrice'],
            'quantity' => $quantity,
            'image' => $attributes['image']['original'] ?? 'default_image.jpg',
        ];
    }
    Session::put('cart', $cart);

    return response()->json(['message' => 'Produit ajouté au panier!']);
}
 
}