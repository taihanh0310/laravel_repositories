
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-12">
				<a href="{{ route('manager.show',['id' => $datas['album']->id]) }}" class="btn btn-primary">Back to detail</a>
			</div>
	    <div class="row">
	    	<form action="{{ route('manager.update',['id' => $datas['album']->id]) }}" method="post" name="update_album">
	    	@include('manager._form', ['datas' => $datas])
	    	</form>
	    </div>
	</div>
@endsection