<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() // правила
    {
        return [
            "title" => "required|string",
            "content" => "required|string",
            "preview_image" => "required|file",
            "main_image" => "required|file",
            "category_id" => "required|integer|exists:categories,id",
            "tag_ids" => "nullable|array",
            "tag_ids.*" => "nullable|integer|exists:tags,id"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => 'Поле необходимо для заполнения',
            "content.required" => 'Поле необходимо для заполнения',
            "preview_image.required" => 'Поле необходимо для заполнения',
            "preview_image.file" => 'Необходимо выбрать файл',
            "main_image.required" => 'Поле необходимо для заполнения',
            "main_image.file" => 'Необходимо выбрать файл',
            "category_id.required" => 'Поле необходимо для заполнения',
            "category_id.integer" => 'Неправильный формат категории',
            "category_id.exists" => 'Категории нет в базе',
            "tag_ids.required" => 'Поле необходимо для заполнения',
            "tag_ids.array" => 'Должен быть хотябы 1 тег',
        ];
    }
}
