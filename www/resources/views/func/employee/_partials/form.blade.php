@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
    @endforeach
</ul>
@endif

@csrf
<input type="text" name="name" id="name" placeholder="Name" value="{{ $user->name ?? old('name')}}" required autofocus class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="email" name="email" id="email" placeholder="Email" value="{{ $user->email ?? old('email')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
@if(!$user)
<input type="password" name="password" id="password" placeholder="Password" required autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
@endif
<input type="text" name="cpf" id="cpf" placeholder="CPF" value="{{ $user->cpf ?? old('cpf')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="date" name="birthday" id="birthday" placeholder="Birthday" value="{{ $user->birthday ?? old('birthday')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="cep" id="cep" placeholder="CEP" value="{{ $user->cep ?? old('cep')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="address" id="address" placeholder="Address" value="{{ $user->address ?? old('address')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="district" id="district" placeholder="District" value="{{ $user->district ?? old('district')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="city" id="city" placeholder="City" value="{{ $user->city ?? old('city')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="text" name="number" id="number" placeholder="Number" value="{{ $user->number ?? old('number')}}" required class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input type="checkbox" class="form-checkbox h-5 w-5 text-red-600" name="admin"><span class="ml-2 text-gray-700">Admin</span>
<button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Create user</button>
