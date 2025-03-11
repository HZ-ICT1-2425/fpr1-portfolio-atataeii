<x-faq-layout title="Edit FAQ">
    <link rel="stylesheet" href="{{ asset('css/faq-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq-create-style.css') }}">
    <h1 class="text-main">Edit posts</h1>
    <div class="boxFaq">
        <form method="post" action="{{ url('/posts/' . $post->id) }}">
            @method('Put')
            @csrf
            <div><p class="p4">Type name for your image</p></div>
            <br>
            <input name="image_path" class="question">
            @error('image_path')
            <div class="alert">{{ $message }}</div>
            @enderror
            <div><p class="p4">Edit title</p></div>
            <br>
            <input name="title" class="question" value="{{$post->title}}">
            @error('title')
            <div class="alert">{{ $message }}</div>
            @enderror
            <div><p class="p4">Edit body</p></div>
            <br>
            <textarea name="body" class="answer">{{$post->body}}</textarea>
            @error('body')
            <div class="alert">{{ $message }}</div>
            @enderror
            <br>
            <br>
            <br>
            <br>
            <button class="newFAQ" type="submit">Save</button>
            <br>
            <br>
            <a href="{{url('/posts')}}" class="newFAQ">Cancel</a>
        </form>
    </div>
</x-faq-layout>
