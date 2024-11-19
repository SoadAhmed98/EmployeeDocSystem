<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'hiring_date' => 'required|date',
            'job' => 'required|in:1,2,3,4',
            'notes' => 'nullable|string|max:500',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The employee name is required.',
            'name.string' => 'The employee name must be a string.',
            'name.max' => 'The employee name cannot exceed 255 characters.',
            'hiring_date.required' => 'The hiring date is required.',
            'hiring_date.date' => 'The hiring date must be a valid date.',
            'job.required' => 'The job type is required.',
            'job.in' => 'The job type must be one of the following: 1 (Developer), 2 (Accountant), 3 (HR), 4 (Marketing).',
            'notes.max' => 'The notes cannot exceed 500 characters.',
        ];
    }
}
