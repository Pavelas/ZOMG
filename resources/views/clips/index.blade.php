@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-4">
            <div class="card crud">
                <div class="card-header">Your Clips</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Game</th>
                                <th class="text-center">ELO</th>
                                <th>URL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (Auth::user()->clips as $clip)
                            <tr>
                                <td>{{ $clip->game->abbreviation }}</td>
                                <td class="text-center">
                                    <span class="badge badge-success">{{ $clip->rating }}</span>
                                </td>
                                <td><a href="{{ $clip->url }}" target="_blank">{{ $clip->url }}</a></td>
                                <td>
                                    <form method="POST" action="{{ route('clips.destroy', $clip->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
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
