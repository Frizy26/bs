<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'value' => ['required', 'integer'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
