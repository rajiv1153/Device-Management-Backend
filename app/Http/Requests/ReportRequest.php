<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReportRequest extends FormRequest
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
        'device_id' => 'required|exists:devices,id',
        'temperature' => 'sometimes|nullable',
        'latitude' => 'sometimes|nullable',
        'longitude' => 'sometimes|nullable',
        'online' => 'required',
        'report_time' => 'sometimes|nullable',
    ];
  }
}
