<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HobbieAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'hobbies_title' => 'required|max:255|string',
        ];
    }
}
