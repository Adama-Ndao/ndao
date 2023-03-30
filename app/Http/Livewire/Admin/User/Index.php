<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.user.index', ['users' => $users]);
    }
}
