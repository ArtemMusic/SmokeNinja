<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts->count();
        // dd($posts);
        return view('personal.index', compact('posts'));
    }
}
