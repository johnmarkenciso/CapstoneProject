<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(){
        return view('market.index', [
            'fruits' => Products::latest()->where('product_tags', 'fruits')->get(),
            'vegetables' => Products::latest()->where('product_tags', 'vegetables')->get(),
        ]);
    }
    public function farmers(){
        return view('market.farmer');
    }
    public function about(){
        return view('market.about');
    }
}
