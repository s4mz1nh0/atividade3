<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompatibilidadeRequest extends FormRequest
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
            'processador'=> 'bail|required|min:3|max:100',
            'video'=> 'bail|required|min:3|max:100',
            'ram'=> 'bail|required|numeric|min:1|max:100',
            'espaco'=> 'bail|required|min:1|max:100',

            'game_id'=>'bail|required|integer',
            'sistema_id'=>'bail|required|integer',
            'arquitetura_id'=>'bail|required|integer'
        ];
    }

    public function attributes()
    {
        return [

            'processador'=> 'Processador',
            'video'=> 'Video',
            'ram'=> 'RAM',
            'espaco'=> 'Armazenamento'
        ];
    }

    public function messages()
    {
        return[
        'game_id.required' => 'Favor selecionar um Game',
        'sistema_id.required' => 'Selecione o sistema operacional do game',
        'arquitetura_id.required' => 'Selecione uma opção de arquitetura'
        ];
    }
}
