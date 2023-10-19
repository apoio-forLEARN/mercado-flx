@extends('layouts.app')
@section('slot')
    @include('livewire.welcome.navigation')
    <section class="w-full p-8">
        <div class="grid md:grid-cols-6 grid-cols-1 divide-x rounded-md bg-white outline-none">
            <div class="col-span-3">
                <div class="indent-2 flex items-center justify-center gap-1">
                    <i class='bx bx-search bx-sm'></i>
                    <input class="w-full px-4 py-4 border-none outline-none" placeholder="O digita o que procuras ..." />
                </div>
            </div>
            <div class="col-span-2">
                <div class="indent-2 flex items-center justify-center gap-1">
                    <i class='bx bx-map-pin bx-sm'></i>
                    <input class="w-full px-4 py-4 border-none outline-none"
                        placeholder="qual é o seu estado (ou província)" />
                </div>
            </div>
            <div class="col-span-1">
                <div class="flex items-center justify-center gap-1 bg-emerald-200 px-4 py-4 outline-none rounded-r-sm">
                    <i class='bx bx-search bx-sm'></i>
                    <button class="text-base ">Pesquisar</button>
                </div>
            </div>
        </div>
    </section>
@endsection
