@extends('func.layouts.app')

@section('title', 'Edit ponit')

@section('content')
<h1 class="text-center text-3xl uppercase font-black my-4">Edit Point</h1>

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <form action="{{ route('points.update', $points->id) }}" method="post">
        @method('put')
        @include('func.points._partials.form')
    </form>
</div>
@endsection
