<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Article,User};

class ArticleController extends Controller
{
    public function show(User $user, Article $article)
    {
        return $article->load('user');
    }
}
