<x-layout title="Blog Page">
    <link rel="stylesheet" href="{{ asset('css/blog-style.css') }}">
    <section>
        <div class="h1">
            <h1>Blog Page</h1></div>
    </section>
    <!--Box-->
    <div class="boxBlog">
        <!--Second Section-->
        <section>
            <img src="{{ asset('img/study-choice.jpg') }}" alt="First Image" class="imgStudy">
            <div class="p1">
                <p><a href="{{ url('posts/study-choice') }}" text-decoration="none" target="_blank">Study choice</a></p></div>
            <div class="p2">
                <p><a href="{{ url('posts/study-choice') }}" text-decoration="none" target="_blank">Why did I choose this study...</a></p></div>
            <div class="line">
                <h1>------------------------------------------------------------------------------------------</h1></div>
            <img src="{{ asset('img/swot.jpg') }}" alt="Second Image" class="imgStudy">
            <div class="p1">
                <p><a href="{{ url('posts/swot') }}" text-decoration="none" target="_blank">Personal SWOT analysis</a></p></div>
            <div class="p2">
                <p><a href="{{ url('posts/swot') }}" text-decoration="none" target="_blank">My threats,opportunities,strengths and weaknesses...</a></p></div>
            <div class="line">
                <h1>------------------------------------------------------------------------------------------</h1></div>
            <img src="{{ asset('img/programming-experience.jpg') }}" alt="Third Image" class="imgProEx">
            <div class="p1">
                <p><a href="{{ url('posts/programming-experience') }}" text-decoration="none" target="_blank">Programming experience</a></p></div>
            <div class="p2">
                <p><a href="{{ url('posts/programming-experience') }}" text-decoration="none" target="_blank">What I learned...</a></p></div>
            <div class="line">
                <h1>------------------------------------------------------------------------------------------</h1></div>
            <img src="{{ asset('img/feed-back.jpg') }}" alt="Fourth Image" class="imgStudy">
            <div class="p1">
                <p><a href="{{ url('posts/feedback') }}" text-decoration="none" target="_blank">First feedback</a></p></div>
            <div class="p2">
                <p><a href="{{ url('posts/feedback') }}" text-decoration="none" target="_blank">My first feedback...</a></p></div>
            <div class="line">
                <h1>------------------------------------------------------------------------------------------</h1></div>
            <img src="{{ asset('img/work-company.jpg') }}" alt="Last Image" class="imgStudy">
            <div class="p1">
                <p>Companies I would like work for</p></div>
            <article>
                <div class="p2">
                    <p><a href="{{ url('posts/cloud-connected') }}" text-decoration="none" target="_blank">Cloud Connected</a></p>
                    <p><a href="{{ url('posts/cisco-systems') }}" text-decoration="none" target="_blank">Cisco Systems</a></p></div>
            </article>
        </section>
    </div>
</x-layout>
