<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $posts = Post::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.index', compact('users','posts','tags','categories'));
    }
}
