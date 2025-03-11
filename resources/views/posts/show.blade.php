<x-faq-layout>
    <link rel="stylesheet" href="{{ asset('css/faq-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq-create-style.css') }}">

    <h1 class="text-main">Post number: {{$post->id}}</h1>
    <div class="boxFaq">
        <div class="p1">{{$post->title}}</div>
        <br>
        <br>
        <div class="p2">{{$post->body}}</div>
        <br>
        <br>
    <a href="{{url('/posts')}}" class="newFAQ">Back</a>
    </div>
</x-faq-layout>
