<?php

namespace App\Http\services\Admin\Tag;

use App\Models\Tag;

class Service{
    public function store($data){
        $tag = Tag::FirstOrCreate($data);
        return $tag;
    }

    public function update($data, $tag){
        $tag -> update($data);
        return $tag;
    }
}