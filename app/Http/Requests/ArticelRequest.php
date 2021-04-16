<?php

namespace App\Http\Requests;

use App\Models\Articel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\IdArticelRule;
use App\Rules\DateArticelRule;

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
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
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
                    'id'=>[new IdArticelRule],
                    'title' => "required|max:255|unique:articels,title,".$this->id,
                    'body' => 'required',
                    'created_at' => "date|date_format:m/d/Y|after_or_equal:".date('m/d/Y')
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
            'created_at.after_or_equal'=>'Must after or equal today'
        ];
    }
}
