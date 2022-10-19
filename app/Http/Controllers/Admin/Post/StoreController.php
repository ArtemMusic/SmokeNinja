<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            // dd($data);
            $this->service->store($data);
        } catch (\Exception $exception) {
            abort(404);
        }
        return redirect()->route('admin.post.index');
    }
}
