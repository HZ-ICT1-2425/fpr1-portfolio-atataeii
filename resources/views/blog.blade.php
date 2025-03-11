<x-layout title="Blog Page">
    <link rel="stylesheet" href="{{ asset('css/blog-style.css') }}">
    <section>
        <div class="h1">
            <h1>Blog Page</h1></div>
    </section>
    <!--Box-->
    <div class="boxBlog">
        @if(!$posts)
            <h1 class="h1">This page is empty</h1>
        @endif
        @foreach($posts->take(10) as $post)
            <section>
                <img src="{!! $post->image_path !!}" alt="Image" class="imgStudy">
                <br>
                <div class="p1"> <p>{!! $post->title !!}</p></div>
                <div class="p2"> <p>{!! $post->body !!}</p></div>

                <a class="edit-button" href="{{url('posts/' . $post->id . '/edit')}}">Edit</a>

                <form method="post"  action="{{ url('/posts/' . $post->id) }}">
                    @method('delete')
                    @csrf
                    <br>
                    <br>
                    <br>
                    <button class="delete-button" onclick="return functionDelete();" type="submit">Delete</button>
                </form>
                <br>
                <div class="line"><h1>------------------------------------------------------------------------------------------</h1></div>
            </section>
        @endforeach
        <a class="newFAQ" href="{{url('posts/create')}}">Create new post</a>
    </div>
</x-layout>
