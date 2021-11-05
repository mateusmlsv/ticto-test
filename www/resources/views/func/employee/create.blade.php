@extends('func.layouts.app')

@section('title', 'Resgister new user')

@section('content')
<h1 class="text-center text-3xl uppercase font-black my-4">New user</h1>

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <form action="{{ route('register') }}" method="post">
        @include('func.employee._partials.form')
    </form>
    <script src="{{ asset('js/cep.js') }}" defer></script>
</div>
@endsection
