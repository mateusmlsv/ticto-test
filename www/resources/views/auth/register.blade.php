<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <!-- birthday -->
            <div class="mt-4">
                <x-label for="cpf" :value="__('CPF')" />

                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required />
            </div>

            <!-- birthday -->
            <div class="mt-4">
                <x-label for="birthday" :value="__('Birthday')" />

                <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
            </div>

            <!-- zip_code Address -->
            <div class="mt-4">
                <x-label for="cep" :value="__('CEP')" />

                <x-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required />
            </div>

            <!-- street Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <!-- district Address -->
            <div class="mt-4">
                <x-label for="district" :value="__('District')" />

                <x-input id="district" class="block mt-1 w-full" type="text" name="district" :value="old('district')" required />
            </div>

            <!-- city Address -->
            <div class="mt-4">
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>

            <!-- number Address -->
            <div class="mt-4">
                <x-label for="number" :value="__('Number')" />

                <x-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" required />
            </div>

            <div class="mt-4">
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-red-600" name="admin"><span class="ml-2 text-gray-700">Admin</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

        <script src="{{ asset('js/cep.js') }}" defer></script>
    </x-auth-card>
</x-guest-layout>
