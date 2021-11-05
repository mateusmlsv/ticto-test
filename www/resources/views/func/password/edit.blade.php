@extends('func.layouts.app')

@section('title', 'Edit password')

@section('content')
<h1 class="text-center text-3xl uppercase font-black my-4">Edit your password {{ $user->name }}</h1>

@if (session('message'))
<div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
    {{ session('message') }}
</div>
@endif

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <form action="{{ route('password.update', $user->id) }}" method="post">
        @method('put')
        @include('func.password._partials.form')
    </form>
</div>
@endsection
