<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index(Request $request)
{
    // Déterminer combien de produits afficher par page
    $pageSize = 15;
    
    // Récupérer la page actuelle, sinon par défaut la première page
    $page = $request->input('page', 1);

    // Récupérer les produits paginés
    $products = $this->apiService->getProducts(ceil($pageSize * $page / 25)); 

    // Diviser les produits récupérés en pages localement
    $paginatedProducts = array_slice($products, ($page - 1) * $pageSize, $pageSize);

    $categories = [];
    $brands = [];
    $colors = [];
    $silhouettes = [];
    $genders = [];

    foreach ($paginatedProducts as $product) {
        $attributes = $product['attributes'] ?? [];
        $category = $attributes['category'] ?? 'Autre';

        // Catégories
        if (!isset($categories[$category])) {
            $categories[$category] = [];
        }
        $categories[$category][] = $attributes['name'];

        // Marques
        if (isset($attributes['brand']) && !in_array($attributes['brand'], $brands)) {
            $brands[] = $attributes['brand'];
        }

        // Couleurs
        if (isset($attributes['colorway']) && !in_array($attributes['colorway'], $colors)) {
            $colors[] = $attributes['colorway'];
        }

        // Silhouettes
        if (isset($attributes['silhouette']) && !in_array($attributes['silhouette'], $silhouettes)) {
            $silhouettes[] = $attributes['silhouette'];
        }

        // Genres
        if (isset($attributes['gender']) && !in_array($attributes['gender'], $genders)) {
            $genders[] = $attributes['gender'];
        }
    }

    $cart = Session::get('cart', []);
    $totalQuantity = array_sum(array_column($cart, 'quantity'));

    // Calculer le nombre total de pages en fonction du nombre de produits
    $totalProducts = count($products);
    $totalPages = ceil($totalProducts / $pageSize);

    return view('dashboard', [
        'products' => $paginatedProducts,
        'cart' => $cart,
        'totalQuantity' => $totalQuantity,
        'categories' => $categories,
        'brands' => $brands,
        'colors' => $colors,
        'silhouettes' => $silhouettes,
        'genders' => $genders,
        'totalPages' => $totalPages,
        'currentPage' => $page
    ]);
}

    // Recherche de produits
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = $this->apiService->getProducts(); // Récupère tous les produits
        $filteredProducts = array_filter($products, function ($product) use ($query) {
            $attributes = $product['attributes'] ?? [];

            if (!$query) {
                return true; // Si la recherche est vide, retourne tous les produits
            }

            $searchFields = ['name', 'colorway', 'releaseDate', 'publishedAt','silhouette'];
            foreach ($searchFields as $field) {
                if (isset($attributes[$field]) && stripos($attributes[$field], $query) !== false) {
                    return true;
                }
            }
            return false;
        });

        // En cas de requête AJAX (par exemple, recherche en temps réel)
        if ($request->ajax()) {
            return response()->json([
                'html' => view('partials', ['products' => array_slice($filteredProducts, 0, 12)])->render(),
                'count' => count($filteredProducts),
            ]);
        }

        return view('dashboard', ['products' => array_slice($filteredProducts, 0, 12)]);
    }

    // Afficher le compte et le panier
    public function compte()
    {
        $cart = Session::get('cart', []);
        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $totalQuantity = array_sum(array_column($cart, 'quantity'));

        return view('compte', [
            'cart' => $cart,
            'subtotal' => $subtotal,
            'totalQuantity' => $totalQuantity
        ]);
    }
    public function show($id)
    {
        $product = $this->apiService->getProductById($id);
            $productData = $product['data']; 

            $cart = Session::get('cart', []);
             $subtotal = 0;

    // Calculer le nombre total d'articles dans le panier
    $totalQuantity = array_sum(array_column($cart, 'quantity'));

            return view('detail', ['product' => $productData, 'totalQuantity' => $totalQuantity]);
    }
}
