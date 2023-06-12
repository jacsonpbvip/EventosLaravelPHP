<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <img src="/img/Icone.png">
            </x-slot>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Senha') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __(' Esqueceu sua senha? ') }}
                        </a>
                    @endif

                    <x-button class="ml-4">
                        {{ __('Logar') }}
                    </x-button>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="/" class="button">
                        {{ __('Voltar') }}
                    </a>
                </div>
            </form>
        </x-authentication-card>
    </x-guest-layout>
</body>

</html>
