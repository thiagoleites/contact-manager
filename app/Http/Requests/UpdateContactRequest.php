<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'contact' => ['required', 'string', 'max:20'],
            'email' => ['required', 'min:5', 'email'],
            'status' => ['required|in:active,inactive'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'contact.required' => 'A contact is required',
            'email.required' => 'A email is required',
            'status.required' => 'A status is required',
        ];
    }
}
