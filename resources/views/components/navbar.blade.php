<nav>
    <div class="topnav">
        <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('profile') }}" class="{{ request()->is('profile') ? 'active' : '' }}">Profile</a>
        <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a>
        <a href="{{ route('faq') }}" class="{{ request()->is('faq') ? 'active' : '' }}">FAQ</a>
    </div>
</nav>
