<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function __invoke()
    {
        $posts_likes = auth()->user()->likedPosts->count();
        $posts_comment = auth()->user()->comments->count();
        // dd($posts);
        return view('personal.index', compact('posts_likes','posts_comment'));
    }
}
