<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                            <a href="/" class="text-white px-3 py-2 rounded-md text-sm font-medium">
                                Startup
                            </a>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Book</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @guest
                    <button class="ml-4 bg-green-700 py-1 px-3 rounded-sm text-gray-300 hover:text-gray-100 hover:bg-green-600"> 
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </button>
                    <button class="ml-4 bg-green-700 py-1 px-3 rounded-sm text-gray-300 hover:text-gray-100 hover:bg-green-600"> 
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </button>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    {{-- Content Here --}}
    <main class="max-w-7xl mx-auto px-8 border border-l-gray-100 border-r-gray-100 shadow-md min-h-screen">
        @yield('content')
    </main>
</body>
</html>