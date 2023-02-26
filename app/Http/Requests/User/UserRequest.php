<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'last_name'   => 'required|string|min:2',
            'first_name'   => 'required|string|min:2',
            'team_id'   => 'required',
            'email'       => 'required|email|unique:users',
            'password'    => 'sometimes|required|string|min:6',
            'passwordConfirm' => 'sometimes|required_with:password|same:password',
        ];
    }
}
