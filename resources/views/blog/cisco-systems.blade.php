@include('layouts.header-blog')

    <link rel="stylesheet" href="{{asset('css/ciscoSystems.css')}}">
    <title>Cisco Systems</title>

<body>
<x-navbar-blog />

<main>
        <!--First Section-->
    <section>
        <div class="h1">
        <h1>Cisco Systems</h1></div>
    </section>
        <div class="boxBlogSWC">
        <!--First Section-->
    <section>
        <img src="{{asset('images/ciscoSystem.jpg')}} alt="Company Image" class="imgSWC">
        <div class="p2">
        <p>Born out of the difficulties of a husband and wife working at Stanford to communicate within the organization, Cisco Systems is almost 40 years old today.</p>
        <p>Headquartered in San Jose, Silicon Valley, Cisco is an IT and networking company specializing in routers, switches, and cybersecurity.</p>
        <p>The cybersecurity unit is the most valuable - and the fastest growing - part of the company. Last quarter, it grew its revenue by 14%, according to company data.</p>
        <p>With Cisco SecureX; you can detect, respond, and quickly recover from cyber attacks. It's an integrated platform that can be used across various products, which means</p>
        <p>you can secure your apps, users, endpoints, and network from a single platform.</p>
        <p>A fun fact about the company name: Cisco stands for San Francisco, and the vertical lines on the logo represent the Golden Gate Bridge</p></div>
    </section>
        </div>
</main>
</body>
</html>
