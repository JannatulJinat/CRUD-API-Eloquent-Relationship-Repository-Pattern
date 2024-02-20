<?php

namespace App\Http\Requests\Video;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'watchable_type' => Rule::in(['App\Models\Series', 'App\Models\Collection']),

        ];
    }
    public function messages(): array
    {
        return [
            'watchable_type.in' => 'App\Models\Series or App\Models\Collection',

        ];
    }
}
