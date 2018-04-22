@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-4">
            <div class="card crud">
                <div class="card-header">Trending Clips</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ELO</th>
                                <th>Game</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clips as $clip)
                            <tr>
                                <td class="text-center">
                                    <span class="badge badge-success">{{ $clip->rating }}</span>
                                </td>
                                <td>{{ $clip->game->title }}</td>
                                <td><a href="{{ $clip->url }}" target="_blank">{{ $clip->url }}</a></td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
