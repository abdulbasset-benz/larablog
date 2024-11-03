@vite('resources/css/app.css')

@extends('layouts.app')


@section('content')
    <main class="max-w-5xl h-screen mx-auto px-5 mt-7 text-slate-100">
        <div class=" bg-gray-600 max-w-2xl mx-auto mt-5 rounded-md p-5 ">
            <h1>Create a porpusful Post :</h1>
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data"
                class="flex flex-col mt-5 space-y-5 ">
                @csrf

                <label for="title">title</label>
                <input class="text-slate-900" type="text" name="title" id="">
                <label for="content">Content</label>
                <textarea class="text-slate-900" name="content" id="" cols="30" rows="10"></textarea>
                <label for="image">image</label>
                <input type="file" name="image" id="" class="bg-gray-200 py-3 px-4 rounded-md text-gray-800">
                <div class="flex justify-center">
                    <button type="submit" class=" bg-blue-400 px-8 py-4 rounded-md uppercase  hover:bg-blue-500">submit
                        post</button>
                </div>

            </form>

        </div>

    </main>
@endsection
