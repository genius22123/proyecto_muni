<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        $rules= [
                'titulo'=>'required',
               'fecha'=>'required',
                'estado'=>'required|in:1,2',
                'url'=>'image'
        ];
        if ($this->estado==2) {
            $rules = array_merge($rules,[
                'categoria_publicaciones_id'=>'required',
                'tags'=>'required',
                'extracto'=>'required',
                'cuerpo'=>'required',
            

            ]);
        }
        return $rules;
    }
}
