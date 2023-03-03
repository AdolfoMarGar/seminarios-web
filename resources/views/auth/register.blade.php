<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Real name -->
        <div class="mt-4">
            <x-input-label for="realname" :value="__('Nombre:')" />
            <x-text-input id="realname" class="block mt-1 w-full" type="text" name="realname" :value="old('realname')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('realname')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Apellidos:')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email:')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Provincia -->
        <div class="mt-4">
            <x-input-label for="region" :value="__('Provincia:')" />
            <x-text-input id="region" class="block mt-1 w-full" type="text" name="region" :value="old('region')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('region')" class="mt-2" />
        </div>

        <!-- Entidad -->
        <div class="mt-4">
            <x-input-label for="entity" :value="__('Entidad:')" />
            <x-text-input id="entity" class="block mt-1 w-full" type="text" name="entity" :value="old('entity')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('entity')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña:')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña:')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Iniciar sesión') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
