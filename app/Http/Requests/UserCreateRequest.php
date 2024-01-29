<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserCreateRequest extends FormRequest
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
            'name' =>'required|string',
            'email' =>'required|email',
            'password'=>'required',
            'phone'=>'required|string'
        ];
    }
    public function sanitized(){
        return[
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'password'=> Hash::make($this->password),
            'active'=> 0,
        ];
    }
}
