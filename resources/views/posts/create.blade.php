 <!-- Simplicity is an acquired taste. - Katharine Gerould -->

 <div class="bg-red-200 min-h-screen">
     @vite('resources/css/app.css')
     <div class="flex justify-center text-2xl pt-4 pb-4">
         <h1 class="text-4xl font-semibold">Create a post with this form:</h1>
     </div>
     <div class=" max-w-2xl m-auto mt-3 ">
         <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="flex flex-col">
                 <label for="title" class="pb-4">Post title</label>
                 <input type="text" name="title" id="" required>
                 <label for="content" class="py-4">Your content goes here:</label>
                 <textarea name="content" id="" cols="30" rows="10" required></textarea>
                 <label for="image" class="py-4">Insert image</label>
                 <input type="file" name="image" id="image" required accept="image/*">
             </div>

             <div class="flex justify-center">
                 <button type="submit" class="py-3 px-10 rounded-md bg-blue-300">Submit</button>
             </div>
         </form>
     </div>
 </div>
