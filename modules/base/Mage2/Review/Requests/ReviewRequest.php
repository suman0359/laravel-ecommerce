<?php

namespace Mage2\Review\Requests;

use Mage2\Framework\Http\Request;
use Mage2\Attribute\Models\ProductAttribute;
use Illuminate\Support\Facades\Auth;
class ReviewRequest extends Request
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

        if(!Auth::check()) {
            $validateArray['first_name']    = 'required|max:255';
            $validateArray['last_name']     = 'required|max:255';
            $validateArray['email']         = 'required|max:255|email';
        }

        $validateArray['star']      = 'required|max:255';
        $validateArray['comment']   = 'required';

        return $validateArray;


    }
}
