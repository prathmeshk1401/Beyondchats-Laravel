<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // GET /api/articles
    public function index()
    {
        return Article::all();
    }

    // POST /api/articles
    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'source_url' => $request->source_url,
            'version' => $request->version ?? 'original',
        ]);

        return $article;
    }

    public function show($id)
    {
        return Article::findOrFail($id);
    }
}
