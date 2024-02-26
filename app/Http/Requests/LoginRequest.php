<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // Validation rules
            'username' => ['required', 'alpha', 'min:6', 'max:12'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            // Error messages
            'username.required' => 'Username is required',
            'username.alpha' => 'Username should only contain letters',
            'email.email' => 'Hello this is not a email'
        ];
    }
}
