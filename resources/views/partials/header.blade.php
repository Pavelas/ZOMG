@inject('games', 'App\Game')

<nav class="navbar navbar-expand-lg navbar-dark bg-darker fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('vote.get') }}">ZOMG.tv</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="header">Navigation</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('vote.get') }}">
                    <i class="fa fa-fw fa-bomb"></i>
                    Explore
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clips.trending') }}">
                    <i class="fa fa-fw fa-flash"></i>
                    Trending
                </a>
            </li>
            <li class="header">Exploring Filter</li>
            <li class="nav-item{{ (request()->is('/')) ? ' active-item' : '' }}">
                <a class="nav-link" href="{{ route('vote.get') }}">
                    <i class="fa fa-gamepad"></i>
                    All Games
                </a>
            </li>
            @foreach ($games->orderByDesc('is_popular')->limit(6)->get() as $game)
                <li class="nav-item{{ (request()->is('game/' . $game->id)) ? ' active-item' : '' }}">
                    <a class="nav-link" href="{{ route('vote.get.game', ['id' => $game->id]) }}">
                        <img class="img-responsive" src="{{ $game->icon }}">
                        @if (strlen($game->title) > 15)
                            {{ $game->abbreviation }}
                        @else
                            {{ $game->title }}
                        @endif
                    </a>
                </li>
            @endforeach
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-ellipsis-v"></i>
                    Shore more
                </a>
            </li>
            <li class="header">Copyright</li>
            <li class="nav-item p-2 no-hover" style="font-size: 12px; color: #505050;">                            
                <p>© 2018 zOMG.tv - Valhacks</p>
            </li>
        </ul>
        <ul class="navbar-nav navbar-top ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('clips.create') }}">
                    <i class="fa fa-plus"></i>Add Clip
                </a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">
                    <i class="fa fa-lock"></i>
                    {{ __('Login') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">
                        <i class="fa fa-user"></i>
                        {{ __('Register') }}
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <div class="dropdown show">
                        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user"></i>
                            My Profile
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('clips') }}">
                                <i class="fa fa-fw fa-film mr-3"></i>
                                My Clips
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-sign-out mr-3"></i>
                                Sign Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
