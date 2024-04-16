<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'nullable|max:8000',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'nullable|max:100',
            'sale_date' => 'required',
            'type' => 'nullable|max:100'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Inserisci Titolo',
            'title.max' => "Puoi usare al massimo :max caratteri",
            'description.max' => "Puoi usare al massimo :max caratteri",
            'price.required' => 'Inserisci le cifre del Prezzo',
            'price.max' => "Limite di prezzo $9999",
            'series.max' => "Puoi usare al massimo :max caratteri",
            'sale_date.required' => 'Inserisci la data di pubblicazione',
            'type.max' => "Puoi usare al massimo :max caratteri",
        ];
    }
}
