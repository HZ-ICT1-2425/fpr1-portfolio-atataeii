<x-faq-layout title="Edit FAQ">
    <link rel="stylesheet" href="{{ asset('css/faq-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq-create-style.css') }}">
    <h1 class="text-main">Edit FAQ</h1>
    <div class="boxFaq">
    <form method="post" action="{{ url('/faq/' . $faq->id) }}">
    @method('put')
    @csrf
    <div><p class="p4">Edit question</p></div>
    <br>
    <input name="question" class="question" value="{{$faq->question}}">
    @error('question')
    <div class="alert">{{ $message }}</div>
    @enderror
    <div><p class="p4">Edit answer</p></div>
    <br>
    <textarea name="answer" class="answer">{{$faq->answer}}</textarea>
    @error('answer')
    <div class="alert">{{ $message }}</div>
    @enderror
        <br>
        <br>
        <br>
        <br>
    <button class="newFAQ" type="submit" onclick="return functionSave();">Save</button>
        <br>
        <br>
        <a href="{{url('/faq')}}" class="newFAQ">Cancel</a>
    </form>
    </div>
</x-faq-layout>
