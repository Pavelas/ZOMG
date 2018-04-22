@inject('games', 'App\Game')

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-4">
            <div class="card crud">
                <div class="card-header">All Games</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($games->all() as $game)
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ $game->image }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <a href="{{ route('vote.get.game', $game->id) }}" class="btn btn-primary">Find Clips</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
