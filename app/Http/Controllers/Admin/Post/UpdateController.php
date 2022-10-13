<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $category)
    {
        $data = $request -> validated();
        $this -> service -> update($data, $category);
        return redirect() -> route('admin.post.show', compact('post'));
    }
}
