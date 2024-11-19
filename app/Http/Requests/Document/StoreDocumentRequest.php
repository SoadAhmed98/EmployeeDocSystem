<?php

namespace App\Http\Requests\Document;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentRequest extends FormRequest
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
            'employee_id' => 'required|exists:employees,id',
            'document_type' => 'required|in:1,2,3',
            'issue_date' => 'required|date',
            'expire_date' => 'nullable|date|after_or_equal:issue_date',
            'notes' => 'nullable|string|max:500',
        ];
    }
    public function messages()
    {
        return [
            'employee_id.required' => 'The employee ID is required.',
            'employee_id.exists' => 'The employee must exist in employee\'s table.',
            'document_type.required' => 'The document type is required.',
            'document_type.in' => 'The document type must be one of the following: 1 (ID), 2 (Passport), 3 (Contract).',
            'issue_date.required' => 'The issue date is required.',
            'issue_date.date' => 'The issue date must be a valid date.',
            'expire_date.date' => 'The expire date must be a valid date.',
            'expire_date.after_or_equal' => 'The expire date must be after or equal to the issue date.',
            'notes.string' => 'The notes must be a string.',
            'notes.max' => 'The notes cannot exceed 500 characters.',
        ];
    }
}
