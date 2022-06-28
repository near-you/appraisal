<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkExperienceAddRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'job_title' => 'required|max:50|string',
            'job_subtitle' => 'required|max:50|string',
            'from' => 'required|max:4|string',
            'to' => 'required|max:4|string',
            'job_description' => 'required|max:500|string',
        ];
    }
}
