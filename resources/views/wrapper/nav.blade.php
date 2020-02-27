<!-- Nav -->
<nav id="nav">
    <ul>
        @auth
        <li>
            <a href="{{ route('home') }}"><span class="icon fa-home"></span></a>
        </li>
        @else
        <li>
            <a href="{{ route('welcome') }}"><span class="icon fa-home"></span></a>
        </li>
        @endauth
        @guest
        <li>
            <a href="{{ route('login') }}"><span class="icon fa-sign-in"></span></a>
        </li>
        <li>
            <a href="{{ route('register') }}"><span class="icon fa-registered"></span></a>
        </li>
        @endguest
        <li><a href="{{ route('gallery') }}"><span class="icon fa-camera-retro"></span></a></li>
        <li><a href="{{ route('generic') }}"><span class="icon fa-file-text-o"></span></a></li>
        <li><a href="{{ route('getallnews') }}"><span class="icon fa fa-newspaper-o"></span></a></li>
    </ul>
</nav>