@vite('resources/css/app.css')
@extends('layouts.app')
@section('content')
    <div class="max-w-3xl mx-auto">
        <div
            class="bg-gradient-to-r from-indigo-500 to-purple-600 p-12 rounded-lg shadow-lg flex flex-col items-center max-w-3xl mx-auto mt-10">
            <h1 class="text-6xl font-extrabold text-white mb-6 text-center">{{ $post->title }}</h1>
            <p class="text-lg text-gray-100 leading-relaxed text-center max-w-2xl">{{ $post->content }}</p>
       </div>
        <div class="flex justify-end gap-5 pt-4">
            <a  href="{{ route('posts.edit', ['post' => $post->id]) }}">
                <button class="bg-green-400 px-10 py-3 rounded-md text-white font-semibold text-lg hover:bg-green-500">Edit</button>
            </a>
            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="">
                    <button class="bg-red-400 px-10 py-3 rounded-md text-white font-semibold text-lg hover:bg-red-500">Delete</button>
                </a>
            </form>

        </div>
    </div>
@endsection
