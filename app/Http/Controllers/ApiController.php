<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getAgenda()
    {
        $response = Http::get('http://npxfutbol.000.pe/agenda.json');
        return $response->json();
    }
}
