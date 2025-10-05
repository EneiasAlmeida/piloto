<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $event = $this->route('event'); // Recebe o model via route-model-binding

        return [
            'name' => [
                'required',
                'string',
                'min:5',
                'max:150',
                Rule::unique('events', 'name')->ignore($event->code, 'code')
            ],
            'location' => ['required', 'string', 'min:5', 'max:150'],
            'description' => ['nullable', 'string', 'max:500'],
            'startDate' => ['required', 'date', 'after_or_equal:today'],
            'endDate' => ['required', 'date', 'after_or_equal:startDate'],
        ];
    }
}
