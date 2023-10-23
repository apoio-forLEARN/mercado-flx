@extends('layouts.page-table',[
    'list' => $roles
])
@section('content')
 <input name="code" id="code" wire:model="code" class="mb-2 rounded-sm outline-none">
@endsection
@section('thead')
    <th scope="col" class="px-6 py-3">
        Código
    </th>
    <th scope="col" class="px-6 py-3">
        Nome
    </th>
    <th scope="col" class="px-6 py-3">
        Descrição
    </th>
    <th scope="col" class="px-6 py-3">
        Ação
    </th>
@endsection
@section('tbody')
    @foreach ($roles as $role)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="px-6 py-4">
                {{ $role->code }}
            </td>
            <td class="px-6 py-4">
                {{ $role->name }}
            </td>
            <td class="px-6 py-4">
                {{ $role->description }}
            </td>
            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
        </tr>
    @endforeach
@endsection
