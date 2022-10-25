<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
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
        return view('market.farmer',[
            'farmers' => Farmer::latest()->get(),
            'products' => Products::latest()->where('product_tags', 'fruits')->paginate(2),
        ]);
    }
    public function about(){
        return view('market.about');
    }
    public function login(){
        return view('market.login');
    }
}
