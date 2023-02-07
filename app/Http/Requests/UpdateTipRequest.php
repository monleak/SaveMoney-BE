<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTipRequest extends FormRequest
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
                'title' => ['required'],
                'description' => ['required'],
                'content' => ['required'],
            ];
        }else{
            return [
                'title' => ['sometimes','required'],
                'description' => ['sometimes','required'],
                'content' => ['sometimes','required'],
            ];
        }
    }
}
