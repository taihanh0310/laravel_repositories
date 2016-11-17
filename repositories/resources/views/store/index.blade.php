@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Select from {{ count($data) }} genres</div>

                <div class="panel-body">
                    @foreach($data->chunk(3) as $item)
                    <div class="row">
                        @foreach($item as $genre)
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-check"></i> {{ $genre->name }}</h4>
                                </div>
                                @if($genre->decscription)
                                <div class="panel-body">
                                    <p>{{ $genre->decscription }}</p>
                                    <a href="{{ route('store.browse',['genre' => $genre->name]) }}" class="btn btn-default">Learn More</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
