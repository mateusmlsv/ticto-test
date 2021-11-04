@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
    @endforeach
</ul>
@endif

@csrf
<input type="datetime-local" name="entry" id="entry" placeholder="Entry" value="{{ date('Y-m-d\TH:i', strtotime($points->entry)) ?? old('entry') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="datetime-local" name="exit" id="exit" placeholder="Exit" value="{{ $points->exit ? date('Y-m-d\TH:i', strtotime($points->exit)) : old('exit') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Sumit point</button>
