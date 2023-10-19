<nav class="bg-emerald-200">
    <div class="mx-auto px-3 h-20 flex items-center justify-between">
        <div class="font-normal uppercase text-2xl">
            {{ env('VAR_SITE_NAME') }}
        </div>
        <ul class="flex items-center space-x-4">
            <li>
                <a class="space-x-2 text-xl text-gray-600 hover:text-gray-800">
                    <i class="bx bx-shopping-bag"></i>
                    <span>Produto</span>
                </a>
            </li>
            <li>
                <a class="space-x-2 text-xl text-gray-600 hover:text-gray-800">
                    <i class="bx bx-wallet"></i>
                    <span>Compra</span>
                </a>
            </li>
            <li>
                <a class="space-x-2 text-xl text-gray-600 hover:text-gray-800">
                    <i class="bx bx-store-alt"></i>
                    <span>Encomenda</span>
                </a>
            </li>
            @auth
                <li>
                    <a href="{{ route('dashboard') }}" class="space-x-2 text-xl text-white bg-blue-400 px-2 py-2 rounded-xl" wire:navigate>
                        <i class='bx bx-expand-alt'></i>
                        <span>Painel</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" class="space-x-2 text-xl text-white bg-orange-400 px-2 py-2 rounded-xl" wire:navigate>
                        <i class="bx bx-user"></i>
                        <span>Login</span>
                    </a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="space-x-2 text-xl text-white bg-yellow-400 px-2 py-2 rounded-xl" wire:navigate>
                            <i class="bx bx-file"></i>
                            <span>Registra</span>
                        </a>
                    </li>
                @endif
            @endauth
        </ul>
    </div>
</nav>
