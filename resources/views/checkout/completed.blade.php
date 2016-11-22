@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="panel panel-danger">
            <div class="panel-heading">Checkout completed</div>
            </div>
            <div class="panel-body">
            	<p>
            		Thank for your order! Your order number is: {{ $result }}
            	</p>
            	<p>
            		How to shopping for some more music in our: <a href="{{ route('store.index') }}" class="btn btn-primary">Click here</a>
            	</p>
            </div>
        </div>
    </div>
@endsection