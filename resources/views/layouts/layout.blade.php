<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/side-bar.js')}}"></script>
    @yield('style')
    <title>@yield('title')</title>
</head>

<body>

<header>
@include('partials.header-nav-side-bar')
</header>

<main>
@yield('content')
</main>
<br>
@include('partials.footer')
</body>
</html>
