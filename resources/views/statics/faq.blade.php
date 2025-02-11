@include('layouts.header')

    <link rel="stylesheet" href="{{asset('css/styleFaq.css')}}">
    <title>Faq Page</title>

<body>
<x-sidebar />

<main>
    <!--FAQ Page, First Section-->
    <section>
        <div class="h1">
        <h1>FAQ Page</h1></div>
    </section>
    <!--Questions And Answers-->
        <div class="boxFaq">
    <section>
        <div class="p1">
        <p>How can you print a document from your laptop at HZ?</p></div>
        <div class="p2">
        <p>You need first to go to the<a href="https://hz.mynetpay.nl/Login" target="_blank" text-decoration="none"> HZ print page</a>, and log into your account and then you can upload all necessary files you want to print. After choosing file(s)</p>
        <p>you can set additional settings and confirm your print request.Next, you go to the printer</p>
        <p>scan your card in it, choose printing option and you can enjoy your printed document.</p></div>
        <div class="p1">
        <p>How can you scan a document and send it to your laptop at HZ?</p></div>
        <div class="p2">
        <p>Scanning a document and sending it to your laptop instructions are available on<a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8a56d47dcbd0ffb9cdf78f20b&origin=searchPreview" target="_blank" text-decoration="none"> this page.</a></p></div>
        <div class="p1">
        <p>How can I buy something on the HZ web shop?</p></div>
        <div class="p2">
        <p>You enter the<a href="https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097" target="_blank" text-decoration="none"> HZ Webshop page</a> and after it you need to log in. After authenticating you are able to choose and thus purchase tickets or enrol in for some events</p></div>
        <div class="p1">
        <p>How can you book a project space?</p></div>
        <div class="p2">
        <p>you can book it via <a href="https://hzuniversity.topdesk.net/tas/public/ssp/" target="_blank" text-decoration="none"> Self Service Portal </a>. When you enter it go to: Make a reservation - Reserve meeting room or Project Group room - Reserve a room and then you can take an available time and approve it.</p></div>
        <div class="p1">
        <p>What are the instructions if you want to park your car at the HZ parking lot?</p></div>
        <div class="p2">
        <p>You need to reveal your HZ pass at the gates to get into the HZ parking lot and park there.</p></div>
    </section>
        </div>
</main>
<br>
<br>
<br>
@include('layouts.footer')
</body>
</html>
