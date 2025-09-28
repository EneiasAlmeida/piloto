<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => 'required| between:1,3',
            'name' => 'required|between:5,50',
            'description' => 'required|between:5,200',
            'location' => 'required|between:5,100',
            'startDate' => 'numeric|min:2025,max' . date('Y'),
            'endDate' => 'numeric|min:2025,max' . date('Y')
        ];
    }
}
