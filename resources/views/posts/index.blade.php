<!-- resources/views/blog/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Index</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Blog Posts</h1>

        @if($posts->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-700">{{ Str::limit($post->content, 100) }}</p>
                        <p class="text-sm text-gray-500 mt-2">Published: {{ $post->created_at->format('M d, Y') }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p>No blog posts found.</p>
        @endif
    </div>
</body>
</html>

