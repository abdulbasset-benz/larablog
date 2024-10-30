<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=aldrich:400|angkor:400" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <main class="max-w-5xl h-screen mx-auto text-white">
            <div class="flex flex-col justify-center items-center pt-5">
                <img class=" w-96 " src="{{ asset('images/laravel-2.svg') }}" alt="">
                <h1 class="text-[9rem] font-semibold font-aldrich text-slate-100">DZ</h1>
            </div>
            <h1 class="text-center text-2xl antialiased font-aldrich text-slate-200">Lara-DZ is where algerian laravel
                developers
                <div class="py-3">
                    <span class="text-red-500 uppercase">gather,</span>
                    <span class="text-white uppercase">share</span>
                    <span class="text-green-500 uppercase">and contribute</span>
                </div> to the algerian laravel community.
            </h1>

            <div class="text-center pt-5">
                <button
                    class="px-4 py-4 text-xl font-bold leading-6 capitalize duration-100 transform border-2 rounded-sm cursor-pointer border-green-500 focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 focus:outline-none sm:w-auto sm:px-6 border-text  hover:shadow-lg hover:-translate-y-1 hover:bg-green-500">
                    Explore More!</button>
            </div>
        </main>
    @endsection

</body>

</html>
