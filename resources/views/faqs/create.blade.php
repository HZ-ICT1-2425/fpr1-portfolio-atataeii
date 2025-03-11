<x-faq-layout title="Create new FAQ">
<link rel="stylesheet" href="{{ asset('css/faq-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/faq-create-style.css') }}">

    <h1 class="text-main">Create your new FAQ</h1>
    <div class="boxFaq">
    <form method="post" action="{{ url('/faqs') }}">
    @csrf
    <div><p class="p4">Type your question</p></div>
    <br>
    <input name="question" class="question">
    @error('question')
    <div class="alert">{{ $message }}</div>
    @enderror
    <div><p class="p4">Type your answer</p></div>
    <br>
    <textarea name="answer" class="answer"></textarea>
    @error('answer')
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
    <a href="{{url('/faq')}}" class="newFAQ">Cancel</a>
    </span>
</form>
    </div>
</x-faq-layout>
