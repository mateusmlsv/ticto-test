@extends('func.layouts.app')

@section('title', 'Employee Details')

@section('content')
<h1 class="text-center text-3xl uppercase font-black my-4">Employee details</h1>

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <ul>
        <li><strong>Name: </strong>{{ $user->name }}</li>
        <li><strong>Email: </strong>{{ $user->email }}</li>
        <li><strong>Birthday: </strong>{{ @date('d/m/Y', strtotime($user->birthday)) }}</li>
        <li><strong>CPF: </strong>{{ $user->cpf }}</li>
        <li><strong>Address: </strong>{{ $user->address }}</li>
        <li><strong>District: </strong>{{ $user->district }}</li>
        <li><strong>City: </strong>{{ $user->city }}</li>
        <li><strong>Number: </strong>{{ $user->number }}</li>
    </ul>

    <form action="{{ route('employee.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none">Delete employee</button>
    </form>
</div>
@endsection
