<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'Total_price' => ['required', 'numeric'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
