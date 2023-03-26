<?php

namespace App\Http\Requests;

use App\Model\Task;
use Illuminate\Foundation\Http\FormRequest;

class EditTask extends CreateTask
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // CreateTaskのrulesを引っ張ってくる。
        $rule = parent::rules();

        $status_rules = Rule::in(array_keys(Task::STATUS));

        return $rule + [
            'status' => ['required', $status_rules]
        ];
    }


}
