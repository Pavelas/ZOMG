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
                <div class="panel-heading">Zorg.tv</div>
                <div class="panel-body">Welcome to the ZORG.tv</div>
            </div>
        </div>
    </div>
</div>
@endsection
