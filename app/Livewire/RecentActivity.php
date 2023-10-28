<?php

namespace App\Livewire;

use App\Models\UserLogin;
use Livewire\Component;

class RecentActivity extends Component
{
    public function render()
    {
        $activities = $this->getActivities();
        return view('livewire.recent-activity',compact('activities'));
    }

    public function getActivities()
    {
        if (auth()->user()->role->name == 'admin') {
            return UserLogin::with('user')->limit(12)->orderByDesc('id')->get();
        } else {
            return UserLogin::with('user')->where('user_id','>',1)->limit(12)->orderByDesc('id')->get();
        }
        
    }
}
