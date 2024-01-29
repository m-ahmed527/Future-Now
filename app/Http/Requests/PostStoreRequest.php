<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'name'=> 'required',
            'title'=>'required',
            'description'=>'required',
        ];
    }

    public function sanitized(){
        return [
            'name'=>$this->name,
            'description'=>$this->description,
            'title'=>$this->title,
        ];
    }
}
