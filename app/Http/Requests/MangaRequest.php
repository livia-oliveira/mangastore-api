<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MangaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string',
            'description'=>'nullable|string',
            'author'=>'required|string',
            'minimum_age'=>'required|integer',
            'release_year'=>'required|date',
            'publisher'=>'required|string',
        ];
    }
}
