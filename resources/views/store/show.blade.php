@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-danger">
                <div class="panel-heading">This is home page</div>

                <div class="panel-body">
                    <h2>Album: {{ $detail->title }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
