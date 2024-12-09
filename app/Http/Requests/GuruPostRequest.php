<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruPostRequest extends FormRequest
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
            'nip' => 'required',
            'foto' => 'nullable|file|mimes:png,jpg,jpeg',
            'nik' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => '',
        ];
    }
}
