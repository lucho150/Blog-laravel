<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function view($id)
    {

        $articles  = Article::find($id);
        $articles->category;
        $articles->user;
        $articles->tags;
        return view('test.index', ['articles' => $articles]);
        // each() con este metodo vamos a llamar las relaciones del model Article

    }
}
