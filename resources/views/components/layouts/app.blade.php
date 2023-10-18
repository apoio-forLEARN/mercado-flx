@extends('layouts.app')
@section('slot')
    @parent
    {{ $slot }}
@endsection

