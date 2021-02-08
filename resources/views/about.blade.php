@extends('layouts.app')

@section('content')

   
<div id="app">


<section class="w-full px-8 py-16 bg-gray-100 xl:px-8">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center">
            <div class="w-full space-y-5 md:w-4/5 md:pr-16">
                <p class="font-medium text-blue-500 uppercase">assignement</p>
                <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                    Building a blogging platform.
                </h2>
                <p class="text-xl text-gray-600 md:pr-16">Showing up how I would approach building blogging platform with stack and technics I prefer</p>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-white">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center">Tools I use</h2>
        <p class="mt-2 text-lg text-center text-gray-600">Check out our list tools I used to make this assignement great.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white  rounded-full">
                    <img src="https://laravel.com/img/logomark.min.svg" class="h-16" alt="">
                </div>
                <h4 class="text-xl font-medium text-gray-700">Laravel 8</h4>
                <p class="text-base text-center text-gray-500">Each of our plan will provide you and your team with certifications.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white rounded-full">
                    <img src="https://vuejs.org/images/logo.png" class="h-16" alt="">
                </div>
                <h4 class="text-xl font-medium text-gray-700">VueJS + Vuex</h4>
                <p class="text-base text-center text-gray-500">Send out notifications to all your customers to keep them engaged.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white rounded-full">
                 <img class="h-12" src="https://camo.githubusercontent.com/53b9876cd8e38928387c6824043b0e2772b15b1bfdb7f42d0864216abbf3dfe8/68747470733a2f2f7265666163746f72696e6775692e6e7963332e63646e2e6469676974616c6f6365616e7370616365732e636f6d2f7461696c77696e642d6c6f676f2e737667" alt="">
                </div>
                <h4 class="text-xl font-medium text-gray-700">Tailwind</h4>
                <p class="text-base text-center text-gray-500">The right kind of building blocks to take your company to the next level.</p>
            </div>
        </div>
    </div>
</section>
<div class="flex items-center justify-center py-16 bg-gray-100 min-w-screen">
    <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10">
        <div class="flex flex-col items-center lg:flex-row">
            <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
                <p class="mb-2 text-base font-medium tracking-tight text-indigo-500 uppercase">Few things</p>
                <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">About Me</h2>
                <p class="my-6 text-lg text-gray-600">This is little bit different approach to show my skills.</p>
                <a href="mailto:sashafishter@gmail.com?subject=Square 1" class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">Send me email</a>
            </div>
            <div class="w-full lg:w-1/2">
                <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                    <div class="flex flex-col pr-10">
                        <div class="relative pl-12">
                            <svg class="absolute left-0 w-10 h-10 text-indigo-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                            </svg>
                            <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">I started working with Laravel from version 3, and I didn't stop since then. I love the way Laravel is build, and their ecosystem in whole. With little bit help of Vue and Vuex I've build amazing websites with some fancy interactivity. I love to solve complex problems and I never want stop learning new things, especially in always changing world of developemnt.</p>
                        </div>
                        <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                            Saša Fišter
                            <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span>
                        </h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                    </div>
                    <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="{{ asset('/img/sasa.jpeg') }}" alt="Profile image">
                </blockquote>
            </div>
        </div>
    </div>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

@endsection