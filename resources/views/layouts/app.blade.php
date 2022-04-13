<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel Voting App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-background font-sans text-gray-900 text-sm ">
        
        <header class="flex items-center justify-between px-6 py-4">
            <a href="">May Thu</a>

            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="top-0 right-0">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <x-application-logo class="w-10 h-10 rounded-full" />
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatibus dolor numquam iure, aliquid quisquam molestias assumenda fugiat quas aut a aspernatur ea optio officiis necessitatibus. Dolores, nostrum soluta. Nulla blanditiis saepe magni, accusantium nam hic sequi ex qui facere quibusdam voluptatibus deserunt itaque amet sint ipsam! Illum, quibusdam aliquid. Excepturi officiis sunt, voluptatem odit nisi iusto accusantium explicabo suscipit, corrupti ea quis cum molestiae ipsam ut consectetur quae laborum ipsa sint odio. Iusto asperiores provident repellendus amet aliquid omnis iste repudiandae qui obcaecati quam corrupti optio enim ipsam odit deserunt dolor assumenda facere, quo recusandae commodi. Corrupti, amet nihil.
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue-900">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4  pb-3 hover:border-blue-900">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-900">In Progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
