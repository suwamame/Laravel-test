<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'category_id' => 'required|exists:categories,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:1,2,3',
            'email' => 'required|email|max:255',
            'phone-part1' => 'required|regex:/^[0-9]{1,5}$/',
            'phone-part2' => 'required|regex:/^[0-9]{1,5}$/',
            'phone-part3' => 'required|regex:/^[0-9]{1,5}$/',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'detail' => 'required|string|max:120',
        ];
    }

        public function messages()
    {
        return [
            'category_id.required' => 'お問い合わせの種類を選択してください。',
            'first_name.required' => '姓を入力してください。',
            'last_name.required' => '名を入力してください。',
            'gender.required' => '性別を選択してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスはメール形式で入力してください。',
            'phone-part1.required' => '電話番号を入力してください。',
            'phone-part2.required' => '電話番号を入力してください。',
            'phone-part3.required' => '電話番号を入力してください。',
            'phone-part1.regex' => '電話番号は半角数字、ハイフンなしで入力してください。',
            'phone-part2.regex' => '電話番号は半角数字、ハイフンなしで入力してください。',
            'phone-part3.regex' => '電話番号は半角数字、ハイフンなしで入力してください。',
            'phone-part1.max' => '電話番号は5桁までの数字で入力してください。',
            'phone-part2.max' => '電話番号は5桁までの数字で入力してください。',
            'phone-part3.max' => '電話番号は5桁までの数字で入力してください。',
            'address.required' => '住所を入力してください。',
            'detail.required' => 'お問い合わせ内容を入力してください。',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください。',
        ];
    }
}
