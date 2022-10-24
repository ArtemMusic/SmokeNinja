<?php

namespace App\Http\Requests\Admin\User;

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
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "role" => "required|integer",
        ];
    }

    public function messages()
    {
        return [
            "email.unique" => "Данная почта уже судествует",
            "email.required" => "Поле необходимо для заполнения",
            "email.email" => "Неверный формат почты",
        ];
    }
}
