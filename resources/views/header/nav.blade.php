<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">The games</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li {{{ (Request::is('header.main') ? 'class=active' : '') }}}><a href="{{url('header.main')}}">Games</a></li>
                <li {{{ (Request::is('contacts') ? 'class=active' : '') }}}><a href="{{url('contacts')}}">Contacts</a></li>
                <li {{{ (Request::is('about') ? 'class=active' : '') }}}><a href="{{url('about')}}">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                    @auth
                <li class="active"><a href="{{url('home')}}">Profile<span class="sr-only">(current)</span></a></li>
                    @else
                <li><a href="{{ route('login') }}">Log In</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                    @endauth
                    @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>