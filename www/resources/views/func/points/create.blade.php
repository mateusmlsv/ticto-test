@extends('func.layouts.app')

@section('title', 'Resgister new ponit')

@section('content')
<h1 class="text-center text-3xl uppercase font-black my-4">New Point</h1>

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <form action="{{ route('points.store') }}" method="post">
        @include('func.points._partials.form')
    </form>
</div>
@endsection
