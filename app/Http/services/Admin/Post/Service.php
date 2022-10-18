<?php

namespace App\Http\services\Admin\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class Service{
    public function store($data){
        $tagIds = $data["tag_ids"];
        unset($data["tag_ids"]);


        $data['preview_image'] = Storage::disk('public') -> put('/images', $data['preview_image']);
        $data['main_image'] = Storage::disk('public') -> put('/images', $data['main_image']);
        $post = Post::FirstOrCreate($data);

        $post->tags()->attach($tagIds);
        return $post;
    }

    public function update($data, $post){
        $tagIds = $data["tag_ids"];
        unset($data["tag_ids"]);

        // dd($data);
        if( array_key_exists('preview_image',$data)){
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }
        if( array_key_exists('main_image',$data)){
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }

        $post->update($data);
        $post->tags()->sync($tagIds); // удаляет все привязки с тегами
        return $post;
    }
}