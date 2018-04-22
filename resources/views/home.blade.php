@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="blue">
        @include('partials.clip', ['clip' => $ticket[0], 'token' => $ticket['token'], 'blue' => true])
    </div>
    <div class="row">
        <div class="col-sm-12 text-center my-5">
            <div style="position:absolute;top:50%;left:50%;margin-left:-98px;margin-top:-80px;overflow: hidden;">
                <img src="https://vignette.wikia.nocookie.net/boombeach/images/6/64/Vs.png" style="opacity: 0.8; width:80%;">
            </div>
        </div>
    </div>
    <div class="row" id="red">
        @include('partials.clip', ['clip' => $ticket[1], 'token' => $ticket['token'], 'blue' => false])
    </div>
</div>
@endsection
