<header>
    @auth
    Hello {{Auth::User()-> name}}
    <a class="form" href="{{route('logout')}}">Logout</a>
    @endauth



</header>