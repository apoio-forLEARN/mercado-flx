@extends('components.layouts.app')
@section('slot')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @yield('content')
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption>{{ $caption ?? "" }}</caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @yield('thead')
                </tr>
            </thead>
            <tbody>
                @yield('tbody')
            </tbody>
        </table>
    </div>
    <div class="bg-green-600 w-full">
        {{ $list->links() }}
    </div>
@endsection
