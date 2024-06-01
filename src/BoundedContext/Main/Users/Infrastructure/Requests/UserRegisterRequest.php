<?php

namespace Src\BoundedContext\Main\Users\Infrastructure\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'uuid' => 'nullable|string|uuid|unique:users,uuid',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ];
    }
}
