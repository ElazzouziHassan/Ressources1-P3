<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Film extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','string','max:100'],           
            'year' => ['required','numeric','min:1950','max:'.date('Y')],           
            'description' => ['required','string','max:500'],
        ];
    }
}
