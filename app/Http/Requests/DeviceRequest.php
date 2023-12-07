<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeviceRequest extends FormRequest
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
        'name' => 'required',
        'serial_number' => 'required|unique:devices,serial_number,'.$this->device,
        'enabled' => 'required',
        'description' => 'sometimes|nullable',
    ];
  }
}
