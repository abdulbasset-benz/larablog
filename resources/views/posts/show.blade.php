@vite('resources/css/app.css')
@extends('layouts.app')
@section('content')

<div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-12 rounded-lg shadow-lg flex flex-col items-center max-w-3xl mx-auto mt-10">
    <h1 class="text-6xl font-extrabold text-white mb-6 text-center">{{ $post->title }}</h1>
    <p class="text-lg text-gray-100 leading-relaxed text-center max-w-2xl">{{ $post->content }}</p>
</div>

@endsection
