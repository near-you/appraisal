<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillEditRequest extends FormRequest
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
            'technical_skills' => 'required|max:250|string',
            'technical_skills_desc' => 'required|max:500|string',
            'soft_skills' => 'required|max:250|string',
            'soft_skills_desc' => 'required|max:500|string',
        ];
    }
}
