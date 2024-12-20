<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('posts.index');
    }

    public function showPosts(){
        $posts = Post::all();
        
        return view('posts.showPosts', compact('posts'));
    }

    public function about() : View
    {
        return view('posts.about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : view
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
            'image' => 'nullable|image|max:2048', // Validate image file
        ]);

        if($request->hasFile('image')) {
            $imageName = $request->file('image')->store('images', 'public');
            $validated['image'] = $imageName;
        };
        // Create the post with the image path
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->slug = Str::slug($request->get('title'),'-');
        $post->$imageName;
        $post->user_id = 1;
        $post->save();

        return redirect()->route('posts.index')->with('success',  
 'The post was created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
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

        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content')   
        ];

        // Handle image update if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($post->image) {
                Storage::disk('public')->delete('images/' . $post->image);
            }

            // Upload the new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Update the post with the new image path
            $post->update($data);

        return redirect()->route('posts.index', $post)->with('success', 'Post updated successfully');
    }
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Delete the associated image if it exists
        if ($post->image) {
            Storage::disk('public')->delete('images/' . $post->image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}