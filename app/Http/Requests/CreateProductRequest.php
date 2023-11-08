<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Shop\Application\Dto\CreateProductDto;

class CreateProductRequest extends FormRequest
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
            'name' => 'required|string',
            'created_at' => 'required|dateformat:d.m.Y H:i',
            'price' => 'required|int|max:2000000|min:1'
        ];
    }

    public function toDto(): CreateProductDto
    {
        return new CreateProductDto($this->get('name'), $this->get('price'), $this->date('created_at'));
    }
}
