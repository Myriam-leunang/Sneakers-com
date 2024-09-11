<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'http://54.37.12.181:1337/api';
    }

    // Récupération des produits sur plusieurs pages
    public function getProducts($pages = 10)
    {
        $allProducts = [];

        for ($page = 1; $page <= $pages; $page++) {
            $response = Http::get("{$this->baseUrl}/sneakers", [
                'pagination[page]' => $page,      
                'pagination[pageSize]' => 25      
            ]);

            $products = $response->json();

            if (isset($products['data'])) {
                // Fusionner les produits de chaque page dans le tableau principal
                $allProducts = array_merge($allProducts, $products['data']);
            } else {
                // Si la réponse n'est pas conforme ou s'il y a un problème, sortir de la boucle
                break;
            }
        }

        return $allProducts; // Retourner tous les produits récupérés
    }

    // Récupérer un produit par son ID
    public function getProductById($id)
    {
        $response = Http::get("{$this->baseUrl}/sneakers/{$id}");

        return $response->json();
    }
}
