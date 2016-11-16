@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Select from {{ count($data) }} genres</div>

                <div class="panel-body">
                    <ul>
                        @foreach($data as $genre)
                        <li> <a href="{{ route('store.browse',['genre' => $genre->name]) }}">{{ $genre->name }} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
