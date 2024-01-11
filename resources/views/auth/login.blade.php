<x-guest-layout>

    <div class="flex justify-center min-h-screen text-gray-900 bg-gray-100">
        <div class="flex justify-center flex-1 max-w-screen-xl m-0 bg-white shadow sm:m-10 sm:rounded-lg">
            <div class="p-2 lg:w-1/2 xl:w-6/12 sm:p-6">
                <div>
                    <a href="{{url('/')}}">
                    <img src="/img/logo2.svg" class="w-32 mx-auto" />
                    </a>
                </div>
                <div class="flex flex-col mt-8">
                    <h1 class="text-2xl font-extrabold text-center xl:text-3xl">
                        Connexion
                    </h1>

                    <form class="mx-12" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                            <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex flex-col mt-4">
                            @if (Route::has('password.request'))
                            <a class="items-start mb-2 text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublieé?') }}
                            </a>
                            @endif

                            <x-jet-button class="items-center w-full text-center px-auto">

                               <span class="mx-auto">Connexion</span>
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex-1 hidden text-center bg-indigo-100 lg:flex">
                <div class="w-full m-12 bg-center bg-no-repeat bg-contain xl:m-16"
                    style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
                </div>
            </div>
        </div>
    </div>
    {{--<x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>--}}
</x-guest-layout>
