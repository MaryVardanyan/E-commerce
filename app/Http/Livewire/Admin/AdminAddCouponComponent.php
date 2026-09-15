<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminAddCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;


    public function updated($fields){
        $this->validateOnly($fields, [
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'

        ], [
            'code.required' => 'Поле "Код купона" обязательно для заполнения',
            'code.unique' => 'Такой Код купона уже существует',
            'type.required' => 'Поле "Тип купона" обязательно для заполнения',
            'value.required' => 'Поле "Ценность купона" обязательно для заполнения',
            'value.numeric' => 'Поле "Ценность купона" должно быть числовым',
            'cart_value.required' => 'Поле "Стоимость корзины" обязательно для заполнения',
            'cart_value.numeric' => 'Поле "Стоимость корзины" должно быть числовым',
            'expiry_date.required' => 'Поле "Дата истечения" обязательно для заполнения'
        ]);

    }

    public function storeCoupon(){
        $this->validate([
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ],[
            'code.required' => 'Поле "Код купона" обязательно для заполнения',
            'code.unique' => 'Такой Код купона уже существует',
            'type.required' => 'Поле "Тип купона" обязательно для заполнения',
            'value.required' => 'Поле "Ценность купона" обязательно для заполнения',
            'value.numeric' => 'Поле "Ценность купона" должно быть числовым',
            'cart_value.required' => 'Поле "Стоимость корзины" обязательно для заполнения',
            'cart_value.numeric' => 'Поле "Стоимость корзины" должно быть числовым',
            'expiry_date.required' => 'Поле "Дата истечения" обязательно для заполнения',
        ]);
        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->expiry_date = $this->expiry_date;
        $coupon->save();
        session()->flash('message', 'Купон успешно добавлен!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-coupon-component')->layout('layouts.base');
    }
}
