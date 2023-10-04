<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsersComponent extends Component
{

    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function submit()
    {

       $this->validate();

       return response()->json([
            'name' => $this->name,
            'email' => $this->email,
       ]);
    }

    public function render()
    {
        $users = User::paginate();
        return view('livewire.show-users-component',[
            'users' => $users,
        ]);
    }
}
