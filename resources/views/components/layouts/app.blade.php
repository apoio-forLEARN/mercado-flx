@extends('layouts.root')
@section('content')
    @parent
    <section class="container">
        {{ $slot }}
    </section>
@endsection

