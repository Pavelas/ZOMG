@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="panel panel-info">
                <div class="panel-heading">
                    Your Clips
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Game</th>
                                <th>Title</th>
                                <th>URL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (Auth::user()->clips as $clip)
                            <tr>
                                <td>{{ $clip->game->abbreviation }}</td>
                                <td>{{ $clip->title }}</td>
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
                
            <div class="text-center">
                <a href="{{ route('clips.create') }}" class="btn btn-primary">Add new clip</a>
            </div>
        </div>
    </div>
</div>
@endsection
