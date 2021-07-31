<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Sentinel;

class FrontendRequest extends FormRequest
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
        $user_id = Sentinel::getUser()->id;
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];

            case 'POST':
                return [
                    'first_name' => 'required|min:3',
                    'last_name' => 'required|min:3',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|between:3,32',
                    'password_confirm' => 'required|same:password',
                    'pic' => 'mimes:jpg,jpeg,bmp,png|max:10000'
                ];

            case 'PUT':
            case 'PATCH':
                return [
                    'first_name' => 'required|min:3',
                    'last_name' => 'required|min:3',
                    'email' => 'required|unique:users,email,' . $user_id,
                    'password_confirm' => 'same:password',
                    'pic' => 'mimes:jpg,jpeg,bmp,png|max:10000',
                    'institution' => 'required',
                    'degree' => 'required',
                    'first_choice' => 'required',
                    'second_choice' => 'required',
                    'address' => 'required',
                    'email' => 'required',
                    'telephone' => 'required',
                    'postal' => 'required',
                    'dob' => 'required',
                    'pob' => 'required',
                    'gender' => 'required',
                    'marital_status' => 'nullable',
                    'country' => 'required',
                    'first_language' => 'required',
                    'correspondence_language' => 'nullable',
                    'g_name' => 'required',
                    'g_email' => 'required',
                    'g_telephone' => 'required',
                    'g_occupation' => 'nullable',
                    'g_address' => 'required',
                    'previous_inst1' => 'required',
                    'previous_inst2' => 'required',
                    'previous_inst3' => 'required'
                    /*
                    'doc1' => 'mimes:jpg,jpeg,bmp,png, pdf|max:5000|required',
                    'doc2' => 'mimes:jpg,jpeg,bmp,png,pdf|max:5000|required',
                    'doc3' => 'mimes:jpg,jpeg,bmp,png,pdf|max:5000|required',
                    'doc4' => 'mimes:jpg,jpeg,bmp,png,pdf|max:5000|required',
                    'doc5' => 'mimes:jpg,jpeg,bmp,png,pdf|max:5000|required'
                    */
                ];

            default:
                break;
        }
    }
}
