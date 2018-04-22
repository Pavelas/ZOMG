@if ($blue)
    <div class="col-lg-6 col-md-12">
        <div class="card text-white bg-blue mb-4">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="mr-5 w-25">
                        <img src="{{ $clip->user->avatar }}" class="img-fluid circle">
                    </div>
                    <div class="w-75">
                        <h5 class="card-title">{{ $clip->user->username }}</h5>
                        <p class="card-text m-0">{{ $clip->game->title }}</p>
                        <p class="m-0 small">{{ $clip->views }} views</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="w-75 mx-auto">
            <video id="vid1" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls
                data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{ $clip->url }}"}] }'>
            </video>
            <form method="POST" action="{{ route('vote.post', $clip->id) }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <button type="submit" class="btn btn-block btn-primary btn-flat btn-lg mt-2">ZOMG IT</button>
            </form>
        </div>
    </div>
@else
    <div class="col-md-6 order-2 order-md-1">
        <div class="w-75 mx-auto">
            <video id="vid2" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{ $clip->url }}"}] }'>
            </video>
            <form method="POST" action="{{ route('vote.post', $clip->id) }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <button type="submit" class="btn btn-block btn-danger btn-flat btn-lg mt-2">ZOMG IT</button>
            </form>
        </div>
    </div>
    <div class="col-md-6 align-items-end align-self-end order-1 order-md-2">
        <div class="card text-white bg-red mb-4 mb-md-0">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="text-right w-75">
                        <h5 class="card-title">{{ $clip->user->username }}</h5>
                        <p class="card-text m-0">{{ $clip->game->title }}</p>
                        <p class="m-0 small">{{ $clip->views }} views</p>
                    </div>
                    <div class="ml-5 w-25">
                        <img src="{{ $clip->user->avatar }}" class="img-fluid circle">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
