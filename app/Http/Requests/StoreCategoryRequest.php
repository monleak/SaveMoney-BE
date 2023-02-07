<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'user_id' => ['required', 'exists:App\Models\User,id'],
            'privacy' => ['required', Rule::in(['PUBLIC','PRIVATE'])],
            'type' => ['required', Rule::in(['DEBT' , 'LOAN', 'EXPENSE', 'INCOME'])],
            'name' => ['required'],
        ];
    }
}
