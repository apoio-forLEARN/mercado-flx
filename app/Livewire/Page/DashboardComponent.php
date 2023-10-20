<?php

namespace App\Livewire\Page;

use App\Components\GenderOption;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public $person;
    public string $name = '';
    public string $email = '';
    public string $birthday = '';
    public string $phone = '';
    public string $gender = '';

    function __construct(){
        $this->person = Auth::user();
        $this->name = $this->person->name;
        $this->email = $this->person->email;
        $this->birthday = $this->person->birthday;
        $this->phone = $this->person->phone;
        $this->gender = $this->person->gender;
    }

    public function render()
    {
        $genders = GenderOption::factory($this->gender)->elements();
        return view('dashboard',compact('genders'));
    }

}
