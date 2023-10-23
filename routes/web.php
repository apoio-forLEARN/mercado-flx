<?php

use App\Livewire\Page\DashboardComponent;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard',DashboardComponent::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

Route::middleware('auth')->group( function(){
    Route::resource('roles', App\Livewire\Role\RoleComponent::class);
    Route::resource('permissions', App\Livewire\Permission\PermissionComponent::class);
});

require_once __DIR__.'/auth.php';
