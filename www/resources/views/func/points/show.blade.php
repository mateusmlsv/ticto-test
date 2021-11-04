@extends('func.layouts.app')

@section('title', 'Point Details')

@section('content')
<h1 class="text-center text-3xl uppercase font-black my-4">Point details</h1>

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <ul>
        <li><strong>Entry: </strong>{{ @date('d/m/Y H:i:s', strtotime($point->entry)) }}</li>
        <li><strong>Exit: </strong>{{ $point->exit ? date('d/m/Y H:i:s', strtotime($point->exit)) : null }}</li>
        <li><strong>Employee: </strong> {{ $point->user->name }}</li>
    </ul>

    <form action="{{ route('points.destroy', $point->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none">Delete Point</button>
    </form>
</div>
@endsection
