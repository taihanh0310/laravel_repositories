@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $genreDatas->name }}</h3>
        </div>
        <div class="panel-body">
            @if(count($genreDatas->albums) > 0)
            @foreach($genreDatas->albums->chunk(4) as $item)
            <div class="row">
                @foreach($item as $album)
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="{{ $album->getAlbumUrl() }}" alt="{{ $album->title }}">
                        <div class="caption">
                            <h4 class="pull-right">${{ $album->price }}</h4>
                            <h4><a href="{{ route('store.show',$album->id) }}">{{ $album->title }}</a>
                            </h4>
                            <p class="text-center">
                                <form action="{{ route('cart.add',['id' => $album->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary text-left">Buy now</button>
                                    <button class="btn btn-default text-right" type="button" onclick="window.location.href='{{ route('store.show',$album->id) }}'">More Info</button>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
