<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
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
            'judul' => 'required|string|max:255',
            'sinopsis' => 'required|string|max:1000',
            'poster' => 'required|image|max:2048',
            'direktur' => 'required|string|max:255',
            'tahun_rilis' => 'required|integer|min:1900|max:2099',
        ];
    }
}
