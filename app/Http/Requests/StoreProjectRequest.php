<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:30',
            'content' => 'min:10|max:1000',
            'image' => 'nullable|max:200',
            "type_id" => "nullable|exists:types,id",
            "technologies" =>"nullable|exists:technologies,id"
        ];
    }
}
