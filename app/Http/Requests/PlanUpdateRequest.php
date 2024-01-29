<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanUpdateRequest extends FormRequest
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

            'description' => 'required|string',
            'price' => 'required|numeric',
            'type' =>'required|string',
            // 'package' => 'required|string',
        ];
    }

    public function sanitizedPlan(){
        return [
            'name' => $this->name,
            'slug' => str_replace(' ', '_', strtolower($this->name)),
            'description' => $this->description,
            'price' => $this->price,

        ];
    }
    public function sanitizedPackages(){
        $arr = [];
        foreach ($this->package as $key => $n) {

            $arr[$key]['name'] = $n;

        }

        return $arr;
    }
}
