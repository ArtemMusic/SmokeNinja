<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::take(6);
        $posts = $posts->orderBy('id', 'DESC')->where('category_id', '2')->paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::orderBy('id', 'DESC')->where('category_id', '3')->paginate(6);
        $likedPosts2 = Post::orderBy('id', 'DESC')->where('category_id', '4')->paginate(6);
        $likedPosts3 = Post::orderBy('id', 'DESC')->where('category_id', '5')->paginate(6);
        // $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(6); //ASC
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts', 'likedPosts2', 'likedPosts3'));
    }
}
