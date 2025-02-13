@include('layouts.header-blog')

    <link rel="stylesheet" href="{{asset('css/cloudConnected.css')}}">
    <title>Cloud Connected</title>

<body>
<x-navbar-blog />

<main>
        <!--First Section-->
    <section>
        <div class="h1">
        <h1>Cloud Connected</h1></div>
    </section>
        <div class="boxBlogFWC">
        <!--Second Section-->
    <section>
        <img src="{{asset('images/cloudCC.jpg')}} alt="Company Image" class="imgFWC">
        <div class="p2">
        <p>We are an ICT service provider based in Amsterdam with over 10 years of experience in delivering customized IT solutions.</p>
        <p>Our expertise lies in secure, cloud-hosted technologies that are tailored to meet the specific needs of each of our clients. We cater to </p>
        <p>businesses of all sizes, from small startups to large organizations with up to 500 employees. Our goal is to help </p>
        <p>our clients meet both - their immediate operational demands and long-term business goals.</p></div>
    </section>
        </div>
</main>
</body>
</html>
