<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationEditRequest extends FormRequest
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
            'specialty' => 'required|max:250|string',
            'college_name' => 'required|max:250|string',
            'from' => 'required|max:4|string',
            'to' => 'required|max:4|string',
        ];
    }
}
