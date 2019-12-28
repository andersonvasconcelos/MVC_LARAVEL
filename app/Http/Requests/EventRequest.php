<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required',
            'date' => 'required',
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O título do evento é obrigatório',
            'date.required' => 'A data do evento é obrigatória',
            'image.required' => 'A imagem do evento é obrigatória',
        ];
    }
}
