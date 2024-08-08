<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_product;
use App\Models\M_article;
class HomeController extends Controller
{
    public function homeData(){
        $articles = M_article = orderBy('created_at')->get();
        M_article = orderBy('created_at')->get();

    }
}
