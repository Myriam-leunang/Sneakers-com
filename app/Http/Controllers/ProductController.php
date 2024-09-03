<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

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
        //dd($products);
        return view('dashboard', compact('products'));
    }

    public function show($id)
    {
        $product = $this->apiService->getProductById($id);
            $productData = $product['data']; 
            return view('detail', ['product' => $productData]);
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
                'html' => view('partials.products', ['products' => array_slice($filteredProducts, 0, 12)])->render(),
                'count' => count($filteredProducts),
            ]);
        }

        return view('dashboard', ['products' => array_slice($filteredProducts, 0, 12)]);
    }
    
}
