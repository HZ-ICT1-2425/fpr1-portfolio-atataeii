@include('layouts.header-blog')

    <link rel="stylesheet" href="{{asset('css/feedback.css')}}">
    <title>Feedback</title>

<body>
<x-navbar-blog />

<main>
        <!--First Feedback Page--><!--First Section-->
    <section>
        <div class="h1">
        <h1>Feedback</h1></div>
    </section>
        <div class="boxBlogFB">
    <section>
        <div class="p1">
        <p>Compliments:</p></div>
        <div class="p2">
        <p>Nice choice of colors<br> Very nice features<br> Style is great and beautiful<br> Very impressive<br> Interesting motivation<br> They said it was 10/10</p></div>
        <div class="p1">
        <p>Improvements:</p></div>
        <div class="p2">
        <p>Folder for each file (HTML, CSS, PHOTOS, ...) <br> Meaningful names<br> change font</p></div>
        <div class="p1">
        <p>My opinion:</p></div>
        <div class="p2">
        <p>I think this was a great opportunity to improve my site, and realize my mistakes so far.</p></div>
        <div class="p1">
        <p>Click<a href="/pdfFile/Feedback.pdf" target="_blank" style="text-decoration: none;"> here </a>to open whole processed feedback.</p></div>
    </section>
        </div>
</main>
</body>
</html>
