<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolumeRequest extends FormRequest
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
            'name_of_volume'=>'required|string',
            'number_of_volume'=>'required|integer',
            'number_of_chapters'=>'required|integer',
            'stock'=>'required|integer',
            'price'=>'required|integer',
            'manga_id'=> 'required',
        ];
    }
}
