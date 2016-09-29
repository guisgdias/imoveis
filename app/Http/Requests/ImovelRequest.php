<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'status_id' => 'required|exists:imovel_status,id',
                    'type_id' => 'required|exists:imovel_types,id',

                    'title' => 'required|string|max:255',
                    'description' => 'required|string|min:3',
                    'image' => 'required|image',
                    'contact_name' => 'required|max:255',
                    'contact_phone' => 'required|max:255',
                    'price' => 'required|max:255',
                    'condominio' => 'max:255',
                    'iptu' => 'max:255',
                    'area' => 'required|integer',
                    'amount_room' => 'required|integer',
                    'amount_bathroom' => 'required|integer',
                    'parking_space' => 'required|integer',

                    'address' => 'required|min:3|max:255',
                    'number' => 'required|min:3|max:100',
                    'district' => 'required|min:3|max:100',
                    'city' => 'required|min:3|max:100',
                    'uf' => 'required|min:2|max:2',
                    'complement' => 'max:255',
                ];
            }
            case 'PUT': {
                return [
                    'status_id' => 'required|exists:imovel_status,id',
                    'type_id' => 'required|exists:imovel_types,id',

                    'title' => 'required|string|max:255',
                    'description' => 'required|string|min:3',
                    'image' => 'image',
                    'contact_name' => 'required|max:255',
                    'contact_phone' => 'required|max:255',
                    'price' => 'required|max:255',
                    'condominio' => 'max:255',
                    'iptu' => 'max:255',
                    'area' => 'required|integer',
                    'amount_room' => 'required|integer',
                    'amount_bathroom' => 'required|integer',
                    'parking_space' => 'required|integer',

                    'address' => 'required|min:3|max:255',
                    'number' => 'required|min:3|max:100',
                    'district' => 'required|min:3|max:100',
                    'city' => 'required|min:3|max:100',
                    'uf' => 'required|min:2|max:2',
                    'complement' => 'max:255',
                ];
            }
            default:
                break;
        }
    }
}
