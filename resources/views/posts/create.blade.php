<x-faq-layout title="Create new post">
    <link rel="stylesheet" href="{{ asset('css/faq-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq-create-style.css') }}">

    <h1 class="text-main">Create your new post</h1>
    <div class="boxFaq">
        <form method="post" action="{{ url('/posts') }}">
            @csrf
            <div><p class="p4">Type name for your image</p></div>
            <br>
            <input name="image_path" class="question">
            @error('image_path')
            <div class="alert">{{ $message }}</div>
            @enderror
            <div><p class="p4">Type your title</p></div>
            <br>
            <input name="title" class="question">
            @error('title')
            <div class="alert">{{ $message }}</div>
            @enderror
            <div><p class="p4">Type your body</p></div>
            <br>
            <textarea name="body" class="answer"></textarea>
            @error('body')
            <div class="alert">{{ $message }}</div>
            @enderror
            <br>
            <br>
            <br>
            <br>
            <span class="button-area">
    <button type="submit" class="newFAQ" onclick="return functionSave();">Save</button>
        <br>
        <br>
    <a href="{{url('/posts')}}" class="newFAQ">Cancel</a>
    </span>
        </form>
    </div>
</x-faq-layout>
