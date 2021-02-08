<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="w-full px-8 text-gray-700 bg-white shadow" >
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <div class="relative flex flex-col md:flex-row items-center">
                <a href="{{ url('/') }}" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                    <!-- <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">tails<span class="text-indigo-600">.</span></span> -->
                    <img class="w-24" src="https://api.factorialhr.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcEtJIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--45ec2eefe5dd97c619c533d244bfafe56568148a/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MY21WemFYcGxTU0lMTVRRMGVEWTBCam9HUlZRNkZHTnZiV0pwYm1WZmIzQjBhVzl1YzNzSk9neG5jbUYyYVhSNVNTSUxRMlZ1ZEdWeUJqc0dWRG9MWlhoMFpXNTBTU0lMTVRRMGVEWTBCanNHVkRvUFltRmphMmR5YjNWdVpEb1FkSEpoYm5Od1lYSmxiblE2RUdGMWRHOWZiM0pwWlc1MFZBPT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--566e0d85a400fb079764faeba0eb8e9396d1b5a8/logo.gif.png" alt="">
                </a>
                <div class="ml-4">Senior Full Stack Laravel <span class="font-semibold">LARAJOB</span></div>
            </div>
            
            <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
                <a href="{{ route('about') }}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                        About
                </a>
                @auth
                    <a href="{{ route('home') }}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                        Dashboard
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                            Sign out
                        </button>
                    </form>
                    @else
                    <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
                        <a href="{{ route('login') }}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                            Sign in
                        </a>
                        <span class="inline-flex rounded-md shadow-sm">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                                Sign up
                            </a>
                        </span>
                    </div>
                    @endauth
            </div>
        </div>
    </header>
    @yield('content')
    
    <footer class="text-gray-700 bg-white body-font" >
    <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
    <a href="{{ url('/') }}" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
        <img class="w-24" src="https://api.factorialhr.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcEtJIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--45ec2eefe5dd97c619c533d244bfafe56568148a/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MY21WemFYcGxTU0lMTVRRMGVEWTBCam9HUlZRNkZHTnZiV0pwYm1WZmIzQjBhVzl1YzNzSk9neG5jbUYyYVhSNVNTSUxRMlZ1ZEdWeUJqc0dWRG9MWlhoMFpXNTBTU0lMTVRRMGVEWTBCanNHVkRvUFltRmphMmR5YjNWdVpEb1FkSEpoYm5Od1lYSmxiblE2RUdGMWRHOWZiM0pwWlc1MFZBPT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--566e0d85a400fb079764faeba0eb8e9396d1b5a8/logo.gif.png" alt="">
    </a>
        <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">&copy; {{ date('Y') }} Square1 - Senior Full Stack Laravel LARAJOB
        </p>
        <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
            <a href="https://sasha-fishter.medium.com" target="_blank" class="text-gray-400 hover:text-gray-500">
            <img src="https://banner2.cleanpng.com/20180328/lvw/kisspng-medium-logo-publishing-blog-i-5abb6adcaa7024.4856922615222320286981.jpg" class="h-6" alt="">
                <span class="sr-only">Medium</span>
            </a>

            <a href="https://twitter.com/sasha_fishter" target="_blank" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>

            <a href="https://github.com/sasafister" target="_blank" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
            </a>
        </span>
    </div>
</footer>
</body>
</html>
