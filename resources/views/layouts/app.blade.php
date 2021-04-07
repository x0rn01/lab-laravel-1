<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracast Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-100 text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">

            <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo" /></a>
            <div class="flex items-center">

            @if (Route::has('login'))
                <div class="top-0 right-0 px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a ref="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <a href="#">
                    <img src="https://www.gravatar.com/avatar/{{md5("sebastien.wouters@hotmail.com")}}?d=mp"
                         alt="avatar" class="w-10 h-10 rounded-full" />
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                Add ideas form
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies enim id quam ultricies maximus. In eu cursus dolor. Donec convallis, justo sed consectetur egestas, mauris ligula vestibulum nulla, id gravida quam lectus vel risus. Pellentesque tempus felis eros, at imperdiet orci pharetra vel. Cras vitae sollicitudin lorem. Donec sed augue a ipsum porttitor lobortis. Sed congue interdum orci eu ornare. Aenean suscipit id neque id scelerisque. Nunc egestas nisi ac elit tempor, id blandit justo finibus. Morbi tincidunt cursus nulla, in blandit magna dapibus in. Fusce purus metus, egestas quis ultricies ut, finibus sit amet orci. Aenean volutpat mi.
            </div>
            <div class="w-175">

                <nav class="flex items-center justify-between text xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue-700">All Ideas(87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 easi-in
                        border-b-4 pb-3 hover:border-blue-400">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 easi-in
                        border-b-4 pb-3 hover:border-blue-400">In Progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-150 easi-in
                        border-b-4 pb-3 hover:border-blue-400">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 easi-in
                        border-b-4 pb-3 hover:border-blue-400">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>

            </div>
        </main>
    </body>
</html>
