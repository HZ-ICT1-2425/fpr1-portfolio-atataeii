@include('layouts.header')

    <link rel="stylesheet" href="{{asset('css/styleProfile.css')}}">
    <title>Profile Page</title>

<body>
<x-sidebar />

<main>
    <!--Profile Page, First Section-->
    <section>
        <div class="h1">
        <h1>Who am I?</h1></div>
    </section>
    <!--Who Am I?, Second Section-->
        <div class="boxPro">
    <section>
    <!--Profile Photo & Other Information-->
        <div class="imgOption"><img src="{{asset('images/myPhoto.jpg')}}" alt="A Photo Of me" width="250px" height="340px"></div>
        <div class="p1">
        <p>Name</p></div>
        <div class="p2">
        <p>Matin Ataei</p></div>
        <div class="p1">
        <p>Nationality</p></div>
        <div class="p2">
        <p>Iranian</p></div>
        <div class="p1">
        <p>Age</p></div>
        <div class="p2">
        <p>25</p></div>
        <div class="p1">
        <p>More information about me</p></div>
        <div class="p2">
        <p>I really enjoy playing sports, including tennis, maybe I'm not very good at it, but I know how to play.</p></div>
        <div class="p2">
        <p>Another of my interests is computer games, but now I can't play much because of my studies.</p></div>
        <div class="p2">
        <p>Musical instruments are another of my interests. But I don't know any of them. I hope you got to know me a little.</p></div>
        <div class="p1">
        <p>Some of my positive characteristics</p></div>
        <div class="dotList">
            <ul class="textList">
            <li>Very Hard working</li>
            <li>Intrested in making new friends</li></ul></div>
        <div class="p1">
        <p>Below you can find some of my social media profiles</p></div>
        <div class="p2">
        <p><a href="https://www.instagram.com/" text-decoration="none" target="_blank">Instagram account</a></p></div>
        <div class="p2">
        <p><a href="https://www.facebook.com/" text-decoration="none" target="_blank">Facebook account</a></p></div>
        <div class="p2">
        <p><a href="https://github.com/atataeii" text-decoration="none" target="_blank">Github account</a></p></div>
        </div>
    </section>
</main>
<br>
@include('layouts.footer')
</body>
</html>
