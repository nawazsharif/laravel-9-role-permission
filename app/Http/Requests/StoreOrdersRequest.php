<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrdersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'order_id' => 'required|integer',
            'status_name' => 'required|string',
            'customer_id' => 'required|integer',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'customer_name' => 'required|string',
            'payment' => 'required|string',
            'payment_status' => 'required|boolean',
            'order_type_name' => 'required|string',
            'delivery_time' => 'required|date',
            'delivery_charge' => 'required|numeric',
            'order_date_time' => 'required|date',
            'formatted_address' => 'nullable|string',
            'currency' => 'required|string',
            'total_items' => 'required|integer',
            'order_total' => 'required|numeric',
            'customer_phone_number' => 'required|string',
            'paid_amount_by_customer' => 'required|numeric',
            'amount_to_be_paid' => 'required|numeric',
            'discount' => 'required|numeric',
            'service_charge' => 'required|numeric',
            'handeling_fee' => 'required|numeric',
            'restaurant_name' => 'required|string',
            'restaurant_id' => 'required|string',
            'Vat' => 'required|numeric',
            'subtotal' => 'required|numeric',
            'GrandTotal' => 'required|numeric',
            'comment' => 'nullable|string',
            'coupon_title' => 'nullable|string',
            'coupon_value' => 'required|numeric',
            'order_menus' => 'nullable|json',

        ];
    }
}
