<?php

namespace App\Livewire\Role;

use App\Services\RoleService;
use Livewire\Component;

class RoleComponent extends Component
{
    public $code = "code";
    public string $name = "name";
    public string $description = "description";

    private $roleService;

    function __construct(){
        $this->roleService = new RoleService();
    }

    public function index(){
        return $this->render();
    }

    public function render()
    {
        $roles = $this->roleService->findAll();
        return view('livewire.role.show',compact('roles'));
    }

}
