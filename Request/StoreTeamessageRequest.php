<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamessageRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'contents'=> 'required',
            'stumessage_id'=>'required|unique:teamessages|integer',
            'understand'=>'required|between:0,100|integer'
        ];
    }
    public function messages()
    {
        return [
            //
            'contents.required'=>'文章が入力されていません。',
            'stumessage_id.required'=>'番号が入力されていません。',
            'stumessage_id.unique'=>'この番号は既に返信されています',
            'stumessage_id.integer'=>'数値を入力してください。',
            'understand.required'=>'理解度が入力されていません',
            'understand.between'=>'指定範囲外です',
            'understand.integer'=>'数値を入力してください'

        ];
    }
}
