<nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
                <div class="navbar-header">
                        <a href="{{ route('home') }}" class="navbar-brand">Swapidea</a>
                </div>
               
                <div class="collapse navbar-collapse">
                        @if (Auth::check())
                        <ul class="nav navbar-nav">
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Circle</a></li>
                                <li><a href="{{ route('profile.index', ['username'=>Auth::user()->username]) }}"><img src="/uploads/avatars/{{ Auth::user()->avatar}}" 
                                style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> </a>
                                </li>
                        </ul>

                       <form action="{{ route('search.results') }}" role="search" class="navbar-form navbar-left">
                                <div class="form-group">
                                        <input type="text" name="query" class="form-control"
                                        placeholder="Find people and ideas."/>
                                </div>
                                <button type="submit" class="btn btn-default">Search</button>
                        </form>

                        @endif
                        <ul class="nav navbar-nav navbar-right">
                                @if(Auth::check())
                                <li><a href="#">Update profile</a></li>
                                
                                
                                <li><a href="{{route ('auth.signout') }}">Sign out</a></li>


                                @else
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="{{route ('auth.signup') }}">Register Now!</a></li>

                                @endif
                        </ul>
                </div>
        </div>
</nav>