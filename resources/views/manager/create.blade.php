@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="{{ route('manager.index') }}" class="btn btn-primary">Back to list</a>
			</div>
		</div>
	    <div class="row">
	    	<form action="{{ route('manager.store') }}" method="post" name="create_album">
	    		<div class="form-group">
					<label for="genre_id">Genres</label>
					<select class="form-control" id="genre_id" name="genre_id">
						@foreach($datas['genres'] as $genre)
							<option value="{{ $genre->id }}">{{ $genre->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="artist_id">Artists</label>
					<select name="artist_id" class="form-control" id="artist_id">
						@foreach($datas['artists'] as $artist)
							<option value="{{ $artist->id }}">{{ $artist->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="album_titile" class="control-label">Album title</label>
					<input type="text" class="form-control" name="title" id="album_titile" placeholder="Album title" value="{{ old('title') }}">
				</div>

				<div class="form-group">
					<label for="price" class="control-label">Album price</label>
					<input type="text" class="form-control" name="price" id="price" placeholder="Album price" value="{{ old('price') }}">
				</div>
				{{ csrf_field() }}

				<div class="form-group">
					<input type="submit" name="btn_submit" value="Save" class="btn btn-primary">
				</div>
	    	</form>
	    </div>
	</div>
@endsection