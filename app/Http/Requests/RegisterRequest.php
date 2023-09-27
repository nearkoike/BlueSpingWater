<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "full_name" => "required|string|min:3|max:190",
            "email" => "required|email:rfc,dns|unique:users",
            "password" => "required|min:6|confirmed",
        ];
    }

    protected function passedValidation()
    {
        $this->merge(['password' => Hash::make($this->password)]);
    }

}
