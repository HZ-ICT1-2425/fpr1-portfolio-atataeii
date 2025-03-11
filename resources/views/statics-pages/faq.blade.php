<x-layout title="FAQ Page">
    <link rel="stylesheet" href="{{ asset('css/faq-style.css') }}">
    <section>
        <div class="h1">
            <h1>FAQ Page</h1></div>
    </section>
    <div class="boxFaq">
        <section>
            @foreach($faqs->take(10) as $faq)
            <div class="p1">
                <br>
                <p>{{ $faq->question }}</p></div>
            <div class="p2">
                <p>{!! $faq->answer !!}
            </div>
                <a class="edit-button" href="{{url('faq/' . $faq->id . '/edit')}}">edit</a>

                <form method="post"  action="{{ url('/faq/' . $faq->id) }}">
                    @method('delete')
                    @csrf
                    <br>
                    <br>
                    <br>
                    <button class="delete-button" type="submit" onclick="return functionDelete();">Delete</button>
                </form>
            @endforeach
        </section>
        <br>
        <br>
        <br>
        <br>
        <a class="newFAQ" href="{{url('/faq/create')}}">Create new FAQ</a>
    </div>
    <br>
</x-layout>
