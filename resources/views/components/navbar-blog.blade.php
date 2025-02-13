<header>
<nav>
    <div class="topnav">
        <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('study-choice') }}" class="{{ request()->is('posts/study-choice') ? 'active' : '' }}">Study Choice</a>
        <a href="{{ route('swot') }}" class="{{ request()->is('posts/swot') ? 'active' : '' }}">SWOT</a>
        <a href="{{ route('programming-experience') }}" class="{{ request()->is('posts/programming-experience') ? 'active' : '' }}">Programming experience</a>
        <a href="{{ route('feedback') }}" class="{{ request()->is('posts/feedback') ? 'active' : '' }}">First feedback</a>
        <a href="{{ route('cloudConnected') }}" class="{{ request()->is('posts/cloud-connected') ? 'active' : '' }}">Cloud connected CO</a>
        <a href="{{ route('ciscoSystems') }}" class="{{ request()->is('posts/cisco-systems') ? 'active' : '' }}">Cisco systems CO</a>
</nav>
</header>
