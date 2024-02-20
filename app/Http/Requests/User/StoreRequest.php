<?php

namespace App\Http\Requests\User;

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
            'name' => 'required| string',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min: 8',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Enter your name',
            'email.required' => 'Enter your email',
            'email.unique' => 'Sorry, but this email is already taken. Please provide a different one.',
            'password.required' => 'Enter your password',
        ];
    }
}
