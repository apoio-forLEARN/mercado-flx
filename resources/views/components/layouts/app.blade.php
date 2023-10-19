@extends('layouts.app')
@section('slot')
    @parent
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection

