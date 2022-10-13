<?php

namespace App\Http\services\Admin\Post;

use App\Models\Post;

class Service{
    public function store($data){
        $post = Post::FirstOrCreate($data);
        return $post;
    }

    public function update($data, $post){
        $post -> update($data);
        return $post;
    }
}