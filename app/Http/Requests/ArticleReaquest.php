<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleReaquest extends FormRequest
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
            'name' => "required|min:5",
            'price' => "required|numeric",
            'img' => "image",
        ];
    }
    public function message(){
        return[
            'name.required'=>"ti sei scordato il nome",
            'name.min'=>"minimo 5 caratteri",
            'price.required'=>"ti sei scordato il prezzo",
            'img.required'=>"ti sei scordato l'immagine",
            'img.image'=>"solo immagini",
        ];
    }
}
