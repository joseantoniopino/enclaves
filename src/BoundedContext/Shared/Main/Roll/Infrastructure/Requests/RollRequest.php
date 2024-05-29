<?php

namespace Src\BoundedContext\Shared\Main\Roll\Infrastructure\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RollRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dices' => 'required|array|min:1',
            'dices.*' => ['required', 'regex:/^\d+d\d+$/'],
            'modifier' => 'nullable|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'dices.required' => 'The dices field is required.',
            'dices.array' => 'The dices field must be an array.',
            'dices.min' => 'The dices field must contain at least one element.',
            'dices.*.required' => 'Each dice is required.',
            'dices.*.regex' => 'Each dice must be in the format "XdY", where X and Y are integers.',
        ];
    }
}
