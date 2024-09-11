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

    public function index()
    {
        $products = $this->apiService->getProducts();
        $categories = [];

    foreach ($products['data'] as $product) {
        $attributes = $product['attributes'] ?? [];
        $category = $attributes['category'] ?? 'Autre';
        $brands = [];
        $colors = [];
        $silhouettes = [];
        $genders = [];


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

        // Calculer le nombre total d'articles dans le panier
        $totalQuantity = array_sum(array_column($cart, 'quantity'));

        return view('dashboard', [
            'products' => $products,
        'cart' => $cart,
        'totalQuantity' => $totalQuantity,
        'categories' => $categories,
        'brands' => $brands,
        'colors' => $colors,
        'silhouettes' => $silhouettes,
        'genders' => $genders,
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

    public function search(Request $request)
{
    $query = $request->input('query');

    // Récupérer tous les produits
    $response = $this->apiService->getProducts();
    $products = $response['data'] ?? [];

    // Appliquer le filtre de recherche
    $filteredProducts = array_filter($products, function ($product) use ($query) {
        $attributes = $product['attributes'] ?? [];

        if (!$query) {
            return true; // Retourne tous les produits si la recherche est vide
        }

        $searchFields = ['name', 'colorway', 'releaseDate', 'publishedAt'];
        foreach ($searchFields as $field) {
            if (isset($attributes[$field]) && stripos($attributes[$field], $query) !== false) {
                return true;
            }
        }

        return false;
    });

    if ($request->ajax()) {
        return response()->json([
            'html' => view('partials', ['products' => array_slice($filteredProducts, 0, 12)])->render(),
            'count' => count($filteredProducts),
        ]);
    }

    return view('dashboard', ['products' => array_slice($filteredProducts, 0, 12)]);
}
}
