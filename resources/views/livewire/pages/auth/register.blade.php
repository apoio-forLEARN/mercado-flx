<section class="flex justify-center items-center w-screen h-screen px-1 bg-emerald-200">
    <div class="fixed top-0 left-0 right-0 p-2">
        <a href="/" class="text-xl bg-white rounded-full w-4 h-4 py-1 px-1 items-center" wire:navigate>
            <i class='bx bxs-left-arrow'></i>
        </a>
    </div>
    <div class="bg-white font-mono relative w-2/3">
        <form class="border rounded p-8 space-y-3" wire:submit="login">
            @include('imports.fieldset-social-login')
            <fieldset class="flex flex-col gap-2">
                <legend class="text-center pb-2">Dados pessoais</legend>
                @include('imports.model.user')
                <div>
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        wire:navigate>
                        <i class='bx bxs-user-account'></i>
                        <span>Já tenho uma conta.</span>
                    </a>
                </div>
                <button type="submit"
                    class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class='bx bxs-log-in'></i>
                    <span>Cadastrar</span>
                </button>
            </fieldset>
        </form>
    </div>
</section>
