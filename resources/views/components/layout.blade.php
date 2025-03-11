<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/side-bar.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">

    <title>{{ $title ?? 'default' }}</title>
</head>

<body>
@include('partials.header')
<main>
    {{ $slot }}
</main>
<br>
@include('partials.footer')
</body>
</html>
