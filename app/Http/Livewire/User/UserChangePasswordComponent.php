<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Component;

class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function updated($fields){
        $this->validateOnly($fields, [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ], [
            'current_password.required' => 'Поле текущего пароля обязательно для заполнения',
            'password.required' => 'Поле нового пароля обязательно для заполнения',
            'password.min' => 'Пароль должен содержать минимум 8 символов',
            'password.confirmed' => 'Пароли не совпадают',
            'password.different' => 'Новый пароль должен отличаться от текущего'
        ]);

    }
    public function changePassword(){
        $this->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ], [
            'current_password.required' => 'Поле текущего пароля обязательно для заполнения',
            'password.required' => 'Поле нового пароля обязательно для заполнения',
            'password.min' => 'Пароль должен содержать минимум 8 символов',
            'password.confirmed' => 'Пароли не совпадают',
            'password.different' => 'Новый пароль должен отличаться от текущего'
        ]);
        if(Hash::check($this->current_password, Auth::user()->password)){
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('password_success', 'Пароль изменен!');
        }else{
            session()->flash('password_error', 'Пароли не совпадают!');
        }
    }
    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
