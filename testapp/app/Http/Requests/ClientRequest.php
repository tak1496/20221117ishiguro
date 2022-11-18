<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == '/') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'email' => 'required|email|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ' ※名前を入力してください',
            'name.max' => ' ※名前は20文字以内で入力して下さい',
            'email.required' => ' ※メールアドレスを入力してください',
            'email.email' => ' ※メールアドレスの形式で入力してください',
            'email.max' => ' ※メールアドレスは50文字以内で入力して下さい',
        ];
    }
}
