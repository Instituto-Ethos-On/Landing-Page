<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class BulkStoreCursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            '*.nome' => ['required'],
            '*.area' => ['required'],
            '*.apresentacao' => ['required'],
            '*.objetivo' => ['required'],
            '*.conteudo' => ['required'],
            '*.cl' => ['sometimes', 'nullable'],
            '*.duracao' => ['required'],
            '*.total' => ['required'],
            '*.preco' => ['required'],
            '*.link' => ['sometimes', 'nullable'],
            '*.desconto' =>['sometimes', 'nullable']
        ];
    }
}