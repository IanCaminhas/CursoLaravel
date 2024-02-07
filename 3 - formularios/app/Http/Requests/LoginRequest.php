<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    /*Se as validações ocorrem com sucesso, vou ser rediecionado para /teste
     protected $redirect = '/teste';
    protected $redirectRoute = 'teste'; */

    /*Olha só: posso criar as minhas mensagens quando um campo viola a restrição.
    Não preciso ir em lang e mudar o idioma

    :attribute é para pegar o nome do campo que vioulou as regras

    Isso são as minhas mensagens personalizadas!!!

    as mensagens do lang/pt_BR/validation.php são padrão!!

    */
    public function messages() {
        return [
            'required' => 'Preenche esse campo ae... :attribute',
            'email' => 'Acho que esse ae não está legal, verifique isso aí'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*Aqui poderia verificar se o user está logado para realizar a validação dos campos.
            Por questões de simplicidade, estou retornando true.
        */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=> 'required|email',
            'password' => 'required|min:3'
        ];
    }
}
