<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSmartphoneVariantRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'hardware_memory' => 'required|integer',
            'battery' => 'required|integer'
        ];
    }
}
