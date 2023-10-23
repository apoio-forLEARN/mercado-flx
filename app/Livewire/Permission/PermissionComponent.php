<?php

namespace App\Livewire\Permission;

use App\Services\PermissionService;
use Livewire\Component;

class PermissionComponent extends Component
{
    public string $label;
    public string $description;


    private $permissionService;

    function __construct(){
        $this->permissionService = new PermissionService();
    }

    public function index(){
        return $this->render();
    }

    public function render()
    {
        $permissions = $this->permissionService->findAll();
        return view('livewire.permission.show','permissions');
    }
}
