<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\password;

class AdminRequest extends FormRequest
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
        $id = $this->route('admin');
        return match($this->method()){
            'POST' =>  [
                'first_name' => 'required|string|min:3',
                'last_name' => 'required|string|min:3',
                'email' => 'email|required',Rule::unique('adimns','email'),
                'activation'=>'required|in:0,1',
                'image'=>'required|image',
                'password' => [
                    'required',
                    Password::min(6),
                    'confirmed'
                ]
            ],
            'PUT','PATCH' =>[
                'first_name' => 'string|min:3',
                'last_name' => 'string|min:3',
                'email' => 'email|required',Rule::unique('adimns','email')->ignore($id),
                'activation'=>'required|in:0,1',
            ],
            default => []
        };
    }
}
