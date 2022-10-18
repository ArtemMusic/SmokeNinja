<?php

namespace App\Http\services\Admin\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class Service{
    public function store($data){
        $tagIds = $data["tag_ids"];
        unset($data["tag_ids"]);


        $data['preview_image'] = Storage::put('/images', $data['preview_image']);
        $data['main_image'] = Storage::put('/images', $data['main_image']);
        $post = Post::FirstOrCreate($data);

        $post->tags()->attach($tagIds);
        return $post;
    }

    public function update($data, $post){
        $post -> update($data);
        return $post;
    }
}