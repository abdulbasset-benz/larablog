@vite('resources/css/app.css')

<div class=" bg-slate-300 max-w-2xl mx-auto mt-5 rounded-md p-5">
    <h1>Create a porpusful Post :</h1>
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data"
        class="flex flex-col mt-5 space-y-5 ">
        @csrf

        <label for="title">title</label>
        <input type="text" name="title" id="">
        <label for="content">Content</label>
        <textarea name="content" id="" cols="30" rows="10" ></textarea>
        <label for="image">image</label>
        <input type="file" name="image" id="" class="bg-gray-200 py-3 px-4 rounded-md text-gray-800">
        <div class="flex justify-center">
            <button type="submit" class=" bg-blue-400 px-8 py-4 rounded-md uppercase  hover:bg-blue-500">submit
                post</button>
        </div>

    </form>

</div>
