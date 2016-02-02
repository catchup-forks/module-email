<?php namespace Cms\Modules\Contact\Http\Requests;

use Cms\Http\Requests\Request;

class FrontendMailRequest extends Request
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
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required|min:20',
        ];

        return $rules;
    }
}
