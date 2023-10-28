<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class UserProfile extends Component
{
    public User $user;

    public Array $profile;

    public function mount()
    {
        $this->user = User::find(auth()->user()->id);
        $this->profile['name'] = $this->user->name;
        $this->profile['email'] = $this->user->email;
        $this->profile['phone'] = $this->user->phone;
    }

    #[Title('User Profile')]
    public function render()
    {
        return view('livewire.user-profile');
    }

    public function save()
    {
        $validate = $this->validate([
            'profile.name' => 'required|unique:users,name,'.$this->user->id,
            'profile.email' => 'required|unique:users,email,'.$this->user->id,
            'profile.phone' => 'required|unique:users,phone,'.$this->user->id,
        ]);
        try {
            User::where('id',$this->user->id)->update($validate['profile']);
            session()->flash('alert','success');
            session()->flash('message','Profile Saved Successfully');
        } catch (\Throwable $th) {
            session()->flash('alert','danger');
            session()->flash('message',$th->getMessage());
        }
    }
}
