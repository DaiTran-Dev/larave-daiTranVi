<?php

namespace App\Http\Requests;

use App\Models\Articel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticelRequest extends FormRequest
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
        switch ($this->method())
        {
            case 'POST':
                return [
                    'title' => 'required|max:255|unique:articels,title',
                    'body' => 'required'
                ];
            break;
            case 'PUT':
                return [
                    'title' => "required|max:255|unique:articels,title,".$this->id,
                    'body' => 'required'
                ];
            break;
        }
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'title.unique'=>'A title unique',
            'title.max'=>'A title max 255',
            'body.required' => 'A body is required',
        ];
    }
}
