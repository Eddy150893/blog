<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentarioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'contenido'=>'required|min:10'
        ];
    }

    public function messages(){
        return [
            'contenido.required'=>'Comentario, el :attribute debe tener al menos 10 caracteres'
        ];
    }
}
