@extends('layouts.app')

@section('content')

<section class="w-full bg-white">

    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">

                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <p class="mb-2 font-medium text-gray-700 uppercase">Create your account</p>
                            <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Register to create the posts</h2>
                        </div>
                        <p class="text-xl text-gray-700">The only way to write posts is to register to our Square1. It's an easy and fast way to see all your posts, create new one or import from other source.</p>
                        <a href="#_" class="inline-block px-8 py-5 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Get Started Today</a>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">

                <form method="POST" action="{{ route('register') }}" class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    @csrf
                    <h4 class="w-full text-3xl font-bold">Signup</h4>
                    <p class="text-lg text-gray-500">or, if you have an account you can <a href="{{ route('login') }}" class="text-blue-600 underline">sign in</a></p>
                    <div class="relative w-full mt-10 space-y-8">
                        <div class="relative">
                            <label class="font-medium text-gray-900">Name</label>
                            <input id="name" type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Email</label>
                            <input id="email" type="email" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Password</label>
                            <input id="password" type="password" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Password Confirm</label>
                            <input id="password-confirm" type="password" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="relative">
                            <button type="submit" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Create Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<!-- <div class="container">
@endsection
