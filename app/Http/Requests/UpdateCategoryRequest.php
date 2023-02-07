<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
                'user_id' => ['required', 'exists:App\Models\User,id'],
                'privacy' => ['required', Rule::in(['PUBLIC','PRIVATE'])],
                'type' => ['required', Rule::in(['DEBT' , 'LOAN', 'EXPENSE', 'INCOME'])],
                'name' => ['required'],
            ];
        }else{
            return [
                'user_id' => ['sometimes','required', 'exists:App\Models\User,id'],
                'privacy' => ['sometimes','required', Rule::in(['PUBLIC','PRIVATE'])],
                'type' => ['sometimes','required', Rule::in(['DEBT' , 'LOAN', 'EXPENSE', 'INCOME'])],
                'name' => ['sometimes','required'],
            ];
        }
    }
}
