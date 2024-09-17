<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShowRoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
            return [
                'fname' => ['required', 'string'],
                'phone' => ['required', 'string', 'min:11', 'max:11','regex:/(07)[0-9]{9}/'],
                'region_id' => ['required', 'integer', 'exists:regions,id'],
                'family_number' => ['required', 'string'],
                'profession' => ['required', 'string'],
                'complex_id' => ['required', 'integer', 'exists:complexes,id'],
                'recognition_method' => ['required', 'integer'],
                'visit_number' => ['required', 'integer'],
                'visit_date' => ['required', 'date'],
                'payment_method' => ['required', 'integer'],
                'note' => ['nullable']

            ];
        }
    
        public function messages()
        {
            return [
                'fname.required' => "الحقل  مطلوب",
                'fname.string' => "الاسم الثلاثي يجب ان يكون نص",
    
                'phone.required' => "الحقل  مطلوب",
                'phone.string' => " رقم الهاتف يجب ان يكون نص",
                'phone.min' => "رقم الهاتف يجب ان لا يزيد عن 11 رقم",
                'phone.max' => "رقم الهاتف يجب ان لا يقل عن 11 رقم",
                'phone.regex' => "صيغة رقم الهاتف خطأ",
        
                "region_id.required" => "الحقل مطلوب",
    
                "family_number.required" => " الحقل مطلوب",
    
                "profession.required" => "الحقل مطلوب",
                "profession.string" => "الحقل يجب ان يكون نص",
    
                "complex_id.required" => "الحقل مطلوب",

                'recognition_method.required' => "الحقل  مطلوب",
                'payment_method.required' => "الحقل  مطلوب",
                'visit_number.required' => "الحقل  مطلوب",
                'visit_date.required' => "الحقل  مطلوب",

            ];
        
    }
}
