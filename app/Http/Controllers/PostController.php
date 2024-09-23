<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|nullable',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'the post was created successfully madafaka');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        return view('posts.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Find the post by its ID
    $post = Post::findOrFail($id);

    // Validate the request data
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    // Update the post with the validated data
    $post->update([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ]);

    return redirect()->route('posts.index', $post)->with('success', 'Post updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
