<?php

namespace App\Http\Requests;

use App\Http\Requests\MangaTypeCreateRequest;

class MangaTypeUpdateRequest extends MangaTypeCreateRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = parent::rules();
        
        $rules['name'] = $this->uniqueRules($this->getTable());
        
        return $rules;
    }
}
