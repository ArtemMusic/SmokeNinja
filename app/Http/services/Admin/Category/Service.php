<?php

namespace App\Http\services\Admin\Category;

use App\Models\Category;

class Service{
    public function store($data){
        $category = Category::FirstOrCreate($data);
        return $category;
    }

    // public function update(){

    // }
}