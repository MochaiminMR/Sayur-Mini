<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_product;
use App\Models\M_article;
class HomeController extends Controller
{
    public function homeData(){
        $products = M_product::take(8)->orderBy('created_at')->get();
        $articles = M_article::take(3)->orderBy('created_at')->get();
        return view('home.index', compact('products', 'articles'));

    }
}
