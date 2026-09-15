<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;

    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'comment' => 'required'
        ], [
            'name.required' => 'Поле "Имя" обязательно для заполнения',
            'email.required' => 'Поле "Email" обязательно для заполнения',
            'email.email' => 'Поле "Email" должно быть в соответствующем формате',
            'phone.required' => 'Поле "Номер телефона" обязательно для заполнения',
            'phone.numeric' => 'Поле "Номер телефона" должно быть числовым',
            'comment.required' => 'Поле "Комментарий" обязательно для заполнения'
        ]);

    }
    public function sendMessage(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'comment' => 'required'
        ], [
            'name.required' => 'Поле "Имя" обязательно для заполнения',
            'email.required' => 'Поле "Email" обязательно для заполнения',
            'email.email' => 'Поле "Email" должно быть в соответствующем формате',
            'phone.required' => 'Поле "Номер телефона" обязательно для заполнения',
            'phone.numeric' => 'Поле "Номер телефона" должно быть числовым',
            'comment.required' => 'Поле "Комментарий" обязательно для заполнения'
        ]);

        $contact = new Contact();
        $contact->name = $this->name; 
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'Спасибо, Ваше сообщение отправлено!');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
