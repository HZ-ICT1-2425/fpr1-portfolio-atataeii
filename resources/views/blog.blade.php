@include('layouts.header')

    <link rel="stylesheet" href="{{asset('css/styleBlog.css')}}">
    <title>Blog Page</title>

<body>
<x-sidebar />

<main>
    <!--Blog Page, First Section-->
    <section>
        <div class="h1">
        <h1>Blog Page</h1></div>
    </section>
    <!--Box-->
        <div class="boxBlog">
    <!--Second Section-->
    <section>
        <img src="{{asset('images/studyPhoto.jpg')}}" alt="First Image" class="imgStudy">
        <div class="p1">
        <p><a href="{{route('study-choice')}}" text-decoration="none" target="_blank">Study choice</a></p></div>
        <div class="p2">
        <p><a href="{{route('study-choice')}}" text-decoration="none" target="_blank">Why did I choose this study...</a></p></div>
        <div class="line">
        <h1>------------------------------------------------------------------------------------------</h1></div>
        <img src="{{asset('images/swot.jpg')}}" alt="Second Image" class="imgStudy">
        <div class="p1">
        <p><a href="{{route('swot')}}" text-decoration="none" target="_blank">Personal SWOT analysis</a></p></div>
        <div class="p2">
        <p><a href="{{route('swot')}}" text-decoration="none" target="_blank">My threats,opportunities,strengths and weaknesses...</a></p></div>
        <div class="line">
        <h1>------------------------------------------------------------------------------------------</h1></div>
        <img src="{{asset('images/programmingEx.jpg')}}" alt="Third Image" class="imgProEx">
        <div class="p1">
        <p><a href="{{route('programming-experience')}}" text-decoration="none" target="_blank">Programming experience</a></p></div>
        <div class="p2">
        <p><a href="{{route('programming-experience')}}" text-decoration="none" target="_blank">What I learned...</a></p></div>
        <div class="line">
        <h1>------------------------------------------------------------------------------------------</h1></div>
        <img src="{{asset('images/feedBack.jpg')}}" alt="Fourth Image" class="imgStudy">
        <div class="p1">
        <p><a href="{{route('feedback')}}" text-decoration="none" target="_blank">First feedback</a></p></div>
        <div class="p2">
        <p><a href="{{route('feedback')}}" text-decoration="none" target="_blank">My first feedback...</a></p></div>
        <div class="line">
        <h1>------------------------------------------------------------------------------------------</h1></div>
        <img src="{{asset('images/wantWork.jpg')}}" alt="Last Image" class="imgStudy">
        <div class="p1">
        <p>Companies I would like work for</p></div>
    <article>
        <div class="p2">
        <p><a href="{{route('cloudConnected')}}" text-decoration="none" target="_blank">Cloud Connected</a></p>
        <p><a href="{{route('ciscoSystems')}}" text-decoration="none" target="_blank">Cisco Systems</a></p></div>
    </article>
    </section>
    </div>
</main>
<br>
@include('layouts.footer')
</body>
</html>
