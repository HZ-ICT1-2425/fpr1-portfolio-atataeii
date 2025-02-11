@include('layouts.header')

    <title>Home Page</title>

<body>
<x-sidebar />

<main>
    <!--Welcome, First Section-->
    <section>
        <div class="h1">
        <h1>Welcome</h1></div>
    </section>
    <!--Why I Choose ICT And Other Things, Second Section-->
        <div class="box">
    <section>
        <div class="p1">
        <p>Why I choose ICT?</p></div>
        <div class="p2">
        <p>When I was a child, I was very interested in computers, technology, and architecture, and I chose architecture for some reason. And after getting a bachelor's degree in architecture,</p>
        <p>I have now decided to study in the computer field because it is a good opportunity to challenge myself in this field.</p></div>

        <div class="p1">
        <p>How I started:</p></div>
        <div class="p2">
        <p>Before I applied to<a href="https://hz.nl/en" target="_blank" style="text-decoration: none;"><strong> HZ University</strong></a>, I met my friends who know programming, and they started coding in front of me and this issue doubled my interest and I started learning C++ language.</p></div>

        <div class="p1">
        <p>My plans:</p></div>
        <div class="p2">
        <p>I came to study at HZ University to improve my programming skills. My plan is to become a professional<a href="https://hz.nl/en/study-programmes/it/study-tracks/software-engineer-se" target="_blank" style="text-decoration: none;"><strong> Software engineer</strong></a>.</p></div>

        <div class="p1">
        <p>My goals:</p></div>
        <div class="dotList">
            <ul class="textList">
            <li>Gaining a lot of knowledge in ICT</li>
            <li>Making an international friends</li>
            </ul></div>

        <div class="p1">
        <p>Is ICT a nice study for me?</p></div>
        <div class="p2">
        <p>I think ICT is a very great study for me because I really enjoy everything about computers and programming.</p></div>
    </section>
    </div>
    <!--Images Under Box, Third Section-->
    <section>
        <img src="{{asset('images/homePImg1.jpg')}}" alt="A Image" class="img1">
        <img src="{{asset('images/homePImg4.jpg')}}" alt="A Image" class="img1">
        <img src="{{asset('images/homePImg2.jpg')}}" alt="A Image" class="img1">
        <img src="{{asset('images/homePImg3.jpg')}}" alt="A Image" class="img1">
    </section>
</main>
@include('layouts.footer')
</body>
</html>
