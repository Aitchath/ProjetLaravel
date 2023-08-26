<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   @vite('resources/css/app.css')
    <title>Projet</title>
</head>
@include('projet')

<body class="bg-blue-50">

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-8 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-lg mr-20 items-stretch justify-center focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-lg mr-32 items-stretch justify-center focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

@yield('content')


</body>
</html>