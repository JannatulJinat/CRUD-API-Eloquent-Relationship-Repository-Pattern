<?php

namespace App\Http\Requests\Likeable;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "like_id"=> "integer",
            "likeable_id"=> "integer",
            'likeable_type' => Rule::in(['App\\Models\\Video', 'App\\Models\\Post']),
        ];
    }

}
