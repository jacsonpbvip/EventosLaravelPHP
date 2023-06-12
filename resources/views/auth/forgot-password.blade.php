<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <img src="/img/Icone.png">
            </x-slot>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button>
                        {{ __('Recuperar Senha') }}
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