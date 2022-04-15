<?php

namespace App\Http\Requests;

use App\Models\Application;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
 /*   public function authorize()
    {
        return false;
    } */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => [ 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'previous_experience' => ['nullable'],
            'date_of_bird' => ['required', 'date'],
            'job' => ['required'],
        ];

    }
}
