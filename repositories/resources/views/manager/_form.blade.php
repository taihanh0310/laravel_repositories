<div class="form-group">
	<label for="genre_id">Genres</label>
	<select class="form-control" id="genre_id" name="genre_id">
		@foreach($datas['genres'] as $genre)
			<option value="{{ $genre->id }}" @if($datas['album']->genre->id == $genre->id) selected="selected" @endif>{{ $genre->name }}</option>
		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="artist_id">Artists</label>
	<select name="artist_id" class="form-control" id="artist_id">
		@foreach($datas['artists'] as $artist)
			<option value="{{ $artist->id }}" @if($datas['album']->artist->id == $artist->id) selected="selected" @endif>{{ $artist->name }}</option>
		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="album_titile" class="control-label">Album title</label>
	<input type="text" class="form-control" name="title" id="album_titile" placeholder="Album title" value="{{ $datas['album']->title }}">
</div>

<div class="form-group">
	<label for="price" class="control-label">Album price</label>
	<input type="text" class="form-control" name="price" id="price" placeholder="Album price" value="{{ $datas['album']->price }}">
</div>
<input type="hidden" name="album_art_url" value="{{ $datas['album']->album_art_url }}">
{{ csrf_field() }}

<div class="form-group">
	<input type="submit" name="btn_submit" value="Save" class="btn btn-primary">
</div>
