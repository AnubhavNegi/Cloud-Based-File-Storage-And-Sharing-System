<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentIdBaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'parent_id'=>[
                Rule::exists(File::class, 'id')
                ->where(function(Builder $query){
                    return $query
                        ->where('is_folder', '=', '1')
                        ->where('created_by', '=', Auth::id());
                })
            ]
        ];
    }
}
