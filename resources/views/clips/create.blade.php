@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto mt-4">
            <div class="card crud">
                <div class="card-header">Add a new Clip</div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('clips.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="start_time" value="0">
                        <input type="hidden" name="end_time" value="60">
                        <input type="hidden" name="views" value="0">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Please enter the title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="url">Video URL:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" id="url" placeholder="Please enter your video URL">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="url">Game:</label>
                            <div class="col-sm-10">
                                <select name="game_id" class="form-control">
                                    @foreach ($games as $game)
                                        <option value="{{ $game->id }}">{{ $game->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default btn-primary">Add Clip</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
