<?php

namespace App\Http\Requests\Admin\BulkAction;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreBulkAction extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.bulk-action.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
                        'perex' => ['nullable', 'string'],
                        'published_at' => ['nullable', 'date'],
                        'enabled' => ['required', 'boolean'],
                        
        ];
    }
}
