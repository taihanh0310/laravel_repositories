@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="{{ route('manager.create') }}"> Add new album</a>
                </h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>
                            Genre
                        </th>
                        <th>
                            Artist
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Price
                        </th> <th> AlbumArtUrl </th>
                        <th></th>
                    </tr>
                    @foreach($albums as $album)
                    <tr>
                        <td>
                            {{ $album->genre->name }}
                        </td>
                        <td>
                            {{ $album->artist->name }}
                        </td>
                        <td>
                            {{ $album->title }}
                        </td>
                        <td>
                            {{ $album->price }}
                        </td>
                        <td>
                            {{ $album->album_art_url }}
                        </td>
                        <td>
                            <a class="btn btn-default" href="{{ route('manager.show', ['id' => $album->id]) }}">Detail</a>
                            <a class="btn btn-danger" href="{{ route('manager.edit', ['id' => $album->id]) }}">edit</a>
                            <form action="{{ route('manager.destroy', ['id' => $album->id])}}">
                                <input type="submit" value="delete"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                    
            </div>
        </div>
    </div>
</div>
@endsection
