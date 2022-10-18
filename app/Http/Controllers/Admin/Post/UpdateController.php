<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        
            $data = $request->validated();
            // dd($data);
            $this -> service -> update($data, $post);
        
        return redirect() -> route('admin.post.show', compact('post'));
    }
}
