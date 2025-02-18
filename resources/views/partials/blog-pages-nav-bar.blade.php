<nav>
    <div class="topnav">
        <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('posts.show' , 'study-choice') }}" class="{{ request()->is('posts/study-choice') ? 'active' : '' }}">Study Choice</a>
        <a href="{{ route('posts.show' , 'swot') }}" class="{{ request()->is('posts/swot') ? 'active' : '' }}">SWOT</a>
        <a href="{{ route('posts.show' , 'programming-experience') }}" class="{{ request()->is('posts/programming-experience') ? 'active' : '' }}">Programming experience</a>
        <a href="{{ route('posts.show' , 'feedback') }}" class="{{ request()->is('posts/feedback') ? 'active' : '' }}">Feedback</a>
        <a href="{{ route('posts.show' , 'cloud-connected') }}" class="{{ request()->is('posts/cloud-connected') ? 'active' : '' }}">Cloud connected</a>
        <a href="{{ route('posts.show' , 'cisco-systems') }}" class="{{ request()->is('posts/cisco-systems') ? 'active' : '' }}">Cisco systems</a></div>
</nav>
