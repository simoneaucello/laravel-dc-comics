<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:2|max:255',
            'description' => 'required|min:10|',
            'thumb' => 'required|min:5',
            'price' => 'required|min:2|max:20',
            'series' => 'required|min:2',
            'sale_date' => 'required|min:4|max:25'
        ];
    }


    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'description.required' => 'La descrizione è un campo obbligatorio',
            'description.min' => 'La descrizione deve contenere almeno :min caratteri',
            'thumb.required' => 'L\'url dell\'immagine è un campo obbligatorio',
            'thumb.min' => 'L\'url deve contenere almeno :min caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'sale_date.required' => 'La data di uscita è un campo obbligatorio',
            'sale_date.min' => 'La data di uscita deve contenere almeno :min caratteri'
        ];
    }
}
