<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'descricao' => 'required|max:500',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo :attribute não pode ser vázio.',
            'descricao.required' => 'O campo :attribute não pode ser vázio',
            'valor.required' => 'O campo :attribute não pode ser vázio.',
            'quantidade.required' => 'O campo :attribute não pode ser vázio.'
        ];
    }
}
