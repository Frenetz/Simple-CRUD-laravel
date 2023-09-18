<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function news(){
        $news = News::all();
        return view('news.index', compact('news'));
    }
}
