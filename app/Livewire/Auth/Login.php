<?php

namespace App\Livewire\Auth;

use App\Models\UserLogin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $name;

    public $password;

    public $rememberMe = false;
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login(){
        $this->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt(['name'=>$this->name,'password'=>$this->password],$this->rememberMe)){
            UserLogin::create([
                'user_id' => Auth::id(),
                'device' => $_SERVER['HTTP_USER_AGENT']
            ]);
            return redirect('admin')->with('success','berhasil login pada '.date('Y-m-d H:i:s'));
        }else{
            session()->flash('alert','danger');
            session()->flash('message','Please make sure your username and Password are correct');
        }
    }
}
