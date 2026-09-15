<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminEditCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;
    public $expiry_date;
    
    public function mount($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $this->code = $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->coupon_id = $coupon->id;
        $this->expiry_date = $coupon->expiry_date;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'

        ], [
            'code.required' => 'Поле "Код купона" обязательно для заполнения',
            'type.required' => 'Поле "Тип купона" обязательно для заполнения',
            'value.required' => 'Поле "Ценность купона" обязательно для заполнения',
            'value.numeric' => 'Поле "Ценность купона" должно быть числовым',
            'cart_value.required' => 'Поле "Стоимость корзины" обязательно для заполнения',
            'cart_value.numeric' => 'Поле "Стоимость корзины" должно быть числовым',
            'expiry_date.required' => 'Поле "Дата истечения" обязательно для заполнения'
        ]);

    }

    public function updateCoupon(){
        $this->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ],[
            'code.required' => 'Поле "Код купона" обязательно для заполнения',
            'type.required' => 'Поле "Тип купона" обязательно для заполнения',
            'value.required' => 'Поле "Ценность купона" обязательно для заполнения',
            'value.numeric' => 'Поле "Ценность купона" должно быть числовым',
            'cart_value.required' => 'Поле "Стоимость корзины" обязательно для заполнения',
            'cart_value.numeric' => 'Поле "Стоимость корзины" должно быть числовым',
            'expiry_date.required' => 'Поле "Дата истечения" обязательно для заполнения'
        ]);
        $coupon = Coupon::find($this->coupon_id);
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->expiry_date = $this->expiry_date;
        $coupon->save();
        session()->flash('message', 'Купон успешно изменен!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupon-component')->layout('layouts.base');
    }
}
