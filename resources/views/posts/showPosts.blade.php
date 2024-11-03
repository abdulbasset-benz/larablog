@vite('resources/css/app.css')

@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 py-8 min-h-screen">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Posts Page</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-lg rounded-lg p-6 transition transform hover:-translate-y-1 hover:shadow-2xl">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-600">{{ Str::limit($post->content, 150) }}</p> <!-- Limits to 150 characters -->
                        <a href="{{ route('posts.show', $post->id) }}" class="mt-5 bg-violet-500 text-white px-5 py-2 rounded-md inline-block hover:bg-violet-600 font-semibold">Read more</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

