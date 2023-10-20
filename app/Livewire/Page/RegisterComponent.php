<?php

namespace App\Livewire\Page;

use App\Components\GenderOption;
use Livewire\Component;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Rule;

class RegisterComponent extends Component
{
    #[Rule(['required', 'string'])]
    public string $name = 'sedr';

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'date'])]
    public string $birthday = '';

    #[Rule(['required', 'string'])]
    public string $phone = '';

    #[Rule(['required', 'string'])]
    public string $gender = '';

    #[Rule(['required', 'string'])]
    public string $password = '';

    #[Rule(['required', 'string'])]
    public string $password_confirmation = '';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        auth()->login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }

    public function render()
    {
        $genders = GenderOption::factory()->elements();
        return view('livewire.pages.auth.register',compact('genders'));
    }

}
