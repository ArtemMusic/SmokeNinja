<?php

namespace App\Http\services\Admin\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data["tag_ids"])) {
                $tagIds = $data["tag_ids"];
                unset($data["tag_ids"]);
            }


            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            $post = Post::FirstOrCreate($data);

            if (isset($tagIds)) {
                $post->tags()->attach($tagIds);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;
    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();
            if (isset($data["tag_ids"])) {
                $tagIds = $data["tag_ids"];
                unset($data["tag_ids"]);
            }

            // dd($data);
            if (array_key_exists('preview_image', $data)) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }

            $post->update($data);
            if (isset($tagIds)) {
                $post->tags()->sync($tagIds); // удаляет все привязки с тегами
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;
    }
}
