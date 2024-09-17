<?php

namespace App\Http\Requests\Leads;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'phone' => ['required', 'string', 'max:11', 'min:11','regex:/(07)[0-9]{9}/'],
            'email' => ['nullable', 'string', 'email'],
            'current_city' => ['required', 'string'],
            'downpayment' => ['required', 'boolean'],
            'state_type' => ['required', 'boolean'],
            'area' => ['required', 'boolean'],
            'location' => ['required', 'array'],
            'location.*' => ['required', 'string'],
            'purpse_purchase' => ['required', 'boolean'],
            'current_budget' => ['required', 'integer'],
            'monthly_payment' => ['required', 'integer'],
            'city' => ['required', 'string'],
            'members_number' => ['required', 'integer'],
            'job' => ['required', 'string'],
            'academic_achievement' => ['required', 'string'],
            'marital_status' => ['required', 'boolean']
        ];
    }
    
    
    public function messages()
    {
        return[
            
             'name.required' => ' الاسم مطلوب',
             'name.string' => ' الاسم يجب ان يكون نص',
             
             'phone.required' => ' رقم الهاتف مطلوب',
             'phone.min' => ' رقم الهاتف يجب ان لا يزيد عن 11 رقماً ',
             'phone.max' => 'رقم الهاتف يجن ان لا يقل عن  11 رقماً ',
             'phone.regex' => 'رقم الهاتف غير صحيح',
             
            
             'email.string' => ' البريد الالكتروني يجب ان يكون نص',
             'email.email' => 'يجب ادخال بريد الكتروني',
             
             'current_city.required' => " المدينة الحالية مطلوبة",

             'downpayment.required' => "الحقل مطلوب",
             
             'state_type.required' => "الحقل مطلوب",
             'area.required' => "الحقل مطلوب",
             
             'location.required' => "الحقل مطلوب",
             'purpse_purchase.required' => "الحقل مطلوب",
             'current_budget.required' => "الحقل مطلوب",
             
             'monthly_payment.required' => "الحقل مطلوب",
             'city.required' => "اسم المنطقة مطلوب",
             'city.string' => ' اسم المنطقة يجب ان يكون نص',
             
             'members_number.required' => 'عدد افراد الاسرة مطلوب',
             'members_number.integer' => 'عدد افراد الاسرة يجب ان يكون رقم',
             
             
             'job.required' => 'اسم المهنة مطلوب',
             'job.string'  => 'اسم المهنة يجب ان يكون نص',
             
             'academic_achievement.required'  => 'التحصيل الدراسي مطلوب',
             'academic_achievement.string'  => 'التحصيل الدراسي يجب ان يكون نص' ,
             
             'marital_status.required' => "الحالة الاجتماعية مطلوبة"
        ];
    }
}
