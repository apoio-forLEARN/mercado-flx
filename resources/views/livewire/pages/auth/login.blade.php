<section class="flex justify-center items-center h-screen py-1 px-1 bg-emerald-200">
    <div class="fixed top-0 left-0 right-0 p-2">
        <a href="/" class="text-xl bg-white rounded-full w-4 h-4 py-1 px-1 items-center" wire:navigate>
            <i class='bx bxs-left-arrow'></i>
        </a>
    </div>
    <div class="bg-white w-1/3 font-mono relative">
        <form class="border rounded p-8 space-y-3" wire:submit="login">
            @include('imports.fieldset-social-login')
            <fieldset class="flex flex-col gap-2">
                <legend class="text-center pb-2">Credências</legend>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" id="email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required wire:model="email" />
                    <label for="email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        <i class='bx bxs-envelope'></i>
                        <span class="ml-2">Email</span>
                    </label>
                    <div class="relative z-0 w-full mb-6 mt-3 group">
                        <input type="password" name="password" id="password"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required wire:model="password" />
                        <label for="password"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            <i class='bx bxs-lock-alt'></i>
                            <span class="ml-2">Senha</span>
                        </label>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                required>
                        </div>
                        <label for="remember"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lembra-se de
                            mí</label>
                    </div>
                    <div>
                        <a href="{{ route('password.request') }}"
                            class="font-medium text-red-600 dark:text-red-500 hover:underline" wire:navigate>
                            <i class='bx bxs-key'></i>
                            <span>Esqueçe a senha.</span>
                        </a>
                    </div>
                    <div>
                        <a href="{{ route('register') }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline" wire:navigate>
                            <i class='bx bxs-user-account'></i>
                            <span>Não tenho uma conta.</span>
                        </a>
                    </div>
                    <button type="submit"
                        class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class='bx bxs-log-in'></i>
                        <span>Entrar</span>
                    </button>
            </fieldset>
        </form>
    </div>
</section>
