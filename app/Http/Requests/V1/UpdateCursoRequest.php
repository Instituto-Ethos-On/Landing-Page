<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == 'PUT'){
            return [
                'nome' => ['required'],
                'area' => ['required'],
                'apresentacao' => ['required'],
                'objetivo' => ['required'],
                'conteudo' => ['required'],
                'cl' => ['sometimes', 'nullable'],
                'duracao' => ['required'],
                'total' => ['required'],
                'preco' => ['required'],
                'link' => ['sometimes', 'nullable'],
                'desconto' => ['sometimes', 'nullable'],
                'cartao_credito' => ['sometimes', 'nullable']
            ];
        } else {
            return [
                'nome' => ['sometimes', 'required'],
                'area' => ['sometimes', 'required'],
                'apresentacao' => ['sometimes', 'required'],
                'objetivo' => ['sometimes', 'required'],
                'conteudo' => ['sometimes', 'required'],
                'cl' => ['sometimes', 'required'],
                'duracao' => ['sometimes', 'required'],
                'total' => ['sometimes', 'required'],
                'preco' => ['sometimes', 'required'],
                'link' => ['sometimes', 'required'],
                'desconto' => ['sometimes', 'required'],
                'cartao_credito' => ['sometimes', 'required']
            ];
        }
        
    }
}
