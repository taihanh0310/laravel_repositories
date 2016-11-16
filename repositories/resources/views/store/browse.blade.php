@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $genreDatas->name }}</h3>
        </div>
        <div class="panel-body">
            @if(count($genreDatas->albums) > 0)
                <div class="list-group">
                    @foreach($genreDatas->albums as $album)
                    <a href="{{ route('store.show', ['id' => $album->id]) }}" class="list-group-item">{{ $album->title }}</a>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
