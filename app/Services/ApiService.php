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

    public function getProducts()
    {
        $response = Http::get("{$this->baseUrl}/sneakers");

        return $response->json();
    }

    public function getProductById($id)
    {
        $response = Http::get("{$this->baseUrl}/sneakers/{$id}");

        return $response->json();
    }
}
