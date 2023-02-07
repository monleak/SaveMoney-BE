<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionRequest extends FormRequest
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
                'wallet_id'=>['required','exists:App\Models\Wallet,id'],
                'category_id'=>['required','exists:App\Models\Category,id'],
                'name'=>['required'],
                'value'=>['required','numeric']
            ];
        }else{
            return [
                'wallet_id'=>['sometimes','required','exists:App\Models\Wallet,id'],
                'category_id'=>['sometimes','required','exists:App\Models\Category,id'],
                'name'=>['sometimes','required'],
                'value'=>['sometimes','required','numeric']
            ];
        }
    }
}
