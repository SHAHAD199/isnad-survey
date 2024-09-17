<?php

namespace App\Http\Requests\EarthLink;

use Illuminate\Foundation\Http\FormRequest;

class StoreEartLinkRequest extends FormRequest
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
            'email' => ['nullable', 'string', 'email'],
            'region_id' => ['required', 'integer', 'exists:regions,id'],
            'city'=>['required', 'string'] ,
            'family_number' => ['required', 'string'],
            'profession' => ['required', 'string'],
            'complex_id' => ['required', 'integer', 'exists:complexes,id'],
            'academic_achievement' => ['required', 'integer'],
            'marital_status' => ['required', 'integer'],
            'best_payment' => ['required', 'integer'],
            'estate_type' => ['required', 'integer'],
            'area' => ['required', 'integer'],
            'location' => ['required', 'array'],
            'location.*' => ['required', 'string'],
            'purchase_purpose' => ['required', 'integer'],
            'payment_budget' => ['required', 'integer'],
            'budget' => ['required', 'integer']
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

            "email.string" => " البريد الالكتروني يجب ان يكون نص",
            "email.email" => "الحقل يجب ان يكون بريد الكتروني",

            "region_id.required" => "الحقل مطلوب",
            "city.required" => "الحقل مطلوب",

            "family_number.required" => " الحقل مطلوب",

            "profession.required" => "الحقل مطلوب",
            "profession.string" => "الحقل يجب ان يكون نص",

            "complex_id.required" => "الحقل مطلوب",
            "academic_achievement.required" => "الحقل مطلوب",
            "marital_status.required" => "الحقل مطلوب",
            "best_payment.required" => "الحقل مطلوب",
            "estate_type.required" => "الحقل مطلوب",
            "area.required" => "الحقل مطلوب",
            "location.required" => "الحقل مطلوب",
            "purchase_purpose.required" => "الحقل مطلوب",
            "payment_budget.required" => "الحقل مطلوب",
            "budget.required" => "الحقل مطلوب"
        ];
    }
}
