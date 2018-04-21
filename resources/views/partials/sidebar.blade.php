@inject('games', 'App\Game')

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
    	@foreach ($games->inRandomOrder()->limit(5)->get() as $game)
    		@if (strlen($game->title) > 15)
		        <li class="text-muted">{{ $game->abbreviation }}</li>
			@else
				<li class="text-muted">{{ $game->title }}</li>
			@endif
		@endforeach
    </ul>
</div>
