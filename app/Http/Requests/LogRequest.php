<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
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
        $compressor = (isDay(4)) ? ['compressor_hours' => 'required|digits:4'] : '';
        $picture = (isDay(2)) ? ['diveboard_picture' => 'required|image']: '';

        return [
            'psi_res' => 'required|digits:4',
            'psi_uts' => 'required|digits:4',
            'psi_sw' => 'required|digits:4',
            'psi_dr' => 'required|digits:4',
            'psi_bank' => 'required|digits:4',
            'psi_oxy_third' => 'required|digits:4',
            'psi_oxy_second' => 'required|digits:4',
            $compressor,
            $picture
        ];
    }
}
