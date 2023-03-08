<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'employee_id' => 'required|integer',
            'working_date' => 'required|date',
            'working_hours' => 'required|numeric|min:0'
        ];
    }
    public function messages()
    {
        return['employee_id.required'=>'従業員IDを入力してください。','employee_id.integer'=> '従業員IDには整数を入力してください。','working_date.required'=>'作業日付を入力してください。','working_date.date'=>'作業日付は日付を入力してください。','working_hours.required'=>'作業時間を入力してください。','working_hours.numeric'=>'作業時間は数値で入力してください。','working_hours.min:0'=>'作業時間には０以上の数値を入力してください。'];
    }
}
