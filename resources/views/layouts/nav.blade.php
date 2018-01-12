<nav class="navbar navbar-expand-md navbar-light bg-inverse" style="background-color: #ffffff; margin-bottom:25px;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{url('/')}}">Home</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="{{ Request::is('reviews/games') ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="{{route('allgames')}}">Games <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{ Request::is('contacts') ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="{{url('/contacts')}}">Contacts</a>
      </li>
      <li class="{{ Request::is('about') ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="{{url('/about')}}">About Us</a>
      </li>
      @auth
      <li class="{{ Request::is('my/posts') ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="{{route('posts')}}">My Posts</a>
      </li>
      @endauth
      @can('sub_only', Auth::User())
      <li class="{{ Request::is('sub') ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="{{url('/sub')}}">Subscriber</a>
      </li>
      @endcan

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Profile
        </a>
        @if (Route::has('login'))
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @auth
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
        </div>
         @endif
      </li>
    </ul>
  </div>
  @auth
  <a href="{{ route('home.index')}}"> <img src="{{asset('storage/'.Auth::user()->avater)}}" style="width: 40px; height: 40px; border-radius: 50%;"></a>
  @endauth
</nav>
