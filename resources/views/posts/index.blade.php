<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header class="relative mb-24">
        <nav class="flex justify-between items-center px-5 pt-5 fixed top-0 right-0 left-0 m-auto ">
            <div >
                <a class="bg-red-600 py-5 px-10 rounded-md" href="{{ route('posts.index') }}">
                    <span class="font-bold uppercase text-white">Lara-</span>
                    <span class="font-bold uppercase text-green-400">DZ</span>
                    
                </a>
            </div>
            <div>
                <ul class="flex gap-20 capitalize">
                    <li><a class="hover:text-teal-600 font-semibold text-lg" href="{{ route('posts.index') }}">home</a></li>
                    <li><a class="hover:text-teal-600 font-semibold text-lg" href="{{ route('posts.create')}}">Create a post</a></li>
                    <li><a class="hover:text-teal-600 font-semibold text-lg" href="{{ route('posts.about')}}">about</a></li>
                </ul>
            </div>
            
            <div>
                <button class="uppercase bg-teal-600 text-white font-bold px-8 py-3 rounded-md hover:bg-teal-500" type="submit">log in</button>
                <button class="uppercase text-black border-2 border-teal-600 font-bold px-8 py-2.5 rounded-md hover:text-white hover:bg-teal-600" type="submit">sign up</button>      
            </div>
            
        </nav>
    </header>
</body>

</html>
