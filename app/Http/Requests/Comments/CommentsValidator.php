<?php

namespace App\Http\Requests\Comments;

use App\Rules\Mobile;
use Illuminate\Foundation\Http\FormRequest;

class CommentsValidator extends FormRequest
{
    protected $redirect = '/#connact';
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
        return [
            'name' => ['required'],
            'mobile' => ['required' , new Mobile()],
            'email' => ['required', 'email' ],
            'content' => ['required', 'min:6','max:255']
        ];
    }

    // protected function getRedirectUrl()
    // {
    //     return ['_previous' => ['url' => 'http://vouo.test#connact']];
    // }
}
