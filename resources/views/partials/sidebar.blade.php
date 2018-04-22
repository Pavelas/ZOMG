@inject('games', 'App\Game')

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="header">Navigation</li>
        <li>
            <a href="#"><span class="fa fa-home"></span> Home</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-bomb"></span> Explore</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-flash"></span> Trending</a>
        </li>
        <li class="header">Exploring filter</li>
        <li>
            <a href="#"><span class="fa fa-gamepad"></span> All Games</a>
        </li>
    	@foreach ($games->orderByDesc('id')->limit(5)->get() as $game)
    		@if (strlen($game->title) > 15)
		        <li>
					<a href="#"><img class="img img-responsive game-icon img-circle" src="{{ $game->icon }}"> {{ $game->abbreviation }}</a>
		        </li>
			@else
		        <li>
					<a href="#"><img class="img img-responsive game-icon img-circle" src="{{ $game->icon }}"> {{ $game->title }}</a>
		        </li>
			@endif
		@endforeach
        <li>
            <a href="#"><span class="fa fa-ellipsis-v"></span>Show more</a>
        </li>
        <li class="header">Copyright</li>
        <li class="text-muted" style="font-size:12px;">
            © 2018 zOMG.tv - Valhacks
        </li>
    </ul>
</div>
