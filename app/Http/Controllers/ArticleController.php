<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRules;
use App\Http\Requests\UpdateRules;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // session()->flush();
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function show($id){          
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create(){
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request, ArticleRules $rules){    
        $data = $request->validated();
        $article = new Article();
        $article->fill($data);
        $article->save();
        session()->flash('success', 'Запись успешно создана');
        return redirect(route('articles.index'));
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));             
    }

    public function update(Request $request, $id, UpdateRules $rules){
        $article = Article::findOrFail($id);
        $data = $rules->validated();
        $article->fill($data);
        $article->save();
        session()->flash('success', 'Запись была успешно обновлена');
        return redirect()->route('articles.index');
    }

    public function delete($id){
        $article = Article::findOrFail($id);
        $article->delete();
        session()->flash('success', 'Запись была успешно удалена');
        return redirect()->route('articles.index');
    }
}