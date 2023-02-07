<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWalletRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'name' => ['required'],
                'currency_id'=>['required','exists:App\Models\Currency,id'],
                'user_id'=>['required','exists:App\Models\User,id'],
                'balance'=>['required','numeric'],
            ];
        }else{
            return [
                'name' => ['sometimes','required'],
                'currency_id'=>['sometimes','required','exists:App\Models\Currency,id'],
                'user_id'=>['sometimes','required','exists:App\Models\User,id'],
                'balance'=>['sometimes','required','numeric'],
            ];
        }
        
    }
}
