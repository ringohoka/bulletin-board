<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class writeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        if($this->path() == 'write'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            //"key => value"
            "text" => ["required"],
        ];
    }
    public function messages(){
        return[
            "text.required" => "メッセージが入力されていません",
        ];
    }

}
