<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header class="sticky top-0 w-full bg-white shadow-md">
        <nav class="flex items-center justify-between max-w-6xl mx-auto p-4">
            <div >
                <a class="bg-red-600 py-5 px-10 rounded-md" href="{{ route('posts.welcome') }}">
                    <span class="font-bold uppercase text-white">Lara-</span>
                    <span class="font-bold uppercase text-green-400">DZ</span>
                    
                </a>
            </div>
            <div>
                <ul class="flex gap-10 capitalize">
                    <li><a class="hover:text-teal-600 font-semibold text-lg" href="{{ route('posts.welcome') }}">home</a></li>
                    <li><a class="hover:text-teal-600 font-semibold text-lg" href="{{ route('posts.create') }}">Create a post</a></li>
                    <li><a class="hover:text-teal-600 font-semibold text-lg" href="{{ route('posts.showPosts') }}">Posts</a></li>
                    <li><a class="hover:text-teal-600 font-semibold text-lg" href="{{ route('posts.about') }}">about</a></li>
                </ul>
            </div>
            
            <div>
                <a href="{{ route('login') }}">
                    <button class="uppercase bg-teal-600 text-white font-bold px-8 py-3 rounded-md hover:bg-teal-500" type="button">log in</button>
                </a>
                <a href="{{ route('register')}}">
                    <button class="uppercase text-black border-2 border-teal-600 font-bold px-8 py-2.5 rounded-md hover:text-white hover:bg-teal-600" type="button">sign up</button>
                </a>
                      
            </div>
            
        </nav>
    </header>

</body>

</html>