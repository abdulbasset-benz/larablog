 <!-- Simplicity is an acquired taste. - Katharine Gerould -->

<div class="bg-slate-200 min-h-screen">
    @vite('resources/css/app.css')
    <div class="flex justify-center text-2xl pt-4 pb-4">
        <h1>create a post with this form :</h1>
    </div>
    <div class=" max-w-2xl m-auto mt-3 ">
        <form action="" method="post">
            <div class="flex flex-col bg-slate-600">
                <label for="title">Post title</label>
                <input type="text" name="title" id="">
                <label for="content">Your content goes here :</label>
                <textarea name="content" id="" cols="30" rows="10">
            </textarea>
            </div>
        </form>
    </div>

</div>
