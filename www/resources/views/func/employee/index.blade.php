@extends('func.layouts.app')

@section('title', 'List employees')

@section('content')

<h1 class="text-center text-3xl uppercase font-black my-4">List employees</h1>

<div class="grid">
    <a href="{{ route('register') }}" class="my-4 uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Register new user</a>
</div>
@if (session('message'))
<div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
    {{ session('message') }}
</div>
@endif

<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">ID</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Employee</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Email</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">CPF</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                #{{ $user->id }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                {{ $user->name }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $user->email }}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $user->cpf }}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
                <a href="{{ route('employee.show', $user->id) }}" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">See</a>
                <a href="{{ route('employee.edit', $user->id) }}" class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="my-4">
    @if (isset($filters))
    @endif
</div>

@endsection
