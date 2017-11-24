<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSmestajRequest extends FormRequest
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
            'naziv' => 'required|unique:smestaj',
            'tip_objekta'  => 'required',
            'broj_zvezdica' => 'required|numeric',
            'vrsta_soba' => 'required',
            'tip_soba' => 'required',
            'broj_ljudi' => 'required',
            'struktura_sobe' => 'required',
            'sadrzaj_sobe' => 'required',
            'udaljenost_centar' => 'numeric',
            'udaljenost_plaza' => 'numeric',
            'udaljenost_stanica' => 'numeric',
            'udaljenost_zicara' => 'numeric',
            'dodatni_sadrzaj' => 'required',
            'napomena_hotel' => 'required',
            'drzava' => 'required',
            'grad' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric'
        ];
    }
}
