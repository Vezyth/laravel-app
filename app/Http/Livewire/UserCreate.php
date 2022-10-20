<?php

namespace App\Http\Livewire;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|String|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);


        $this->name = NULL;
        $this->email = NUll;
        $this->password = NULL;

        $this->emit('userStore');

        session()->flash('success','User Berhasil Dibuat');
    }
}
