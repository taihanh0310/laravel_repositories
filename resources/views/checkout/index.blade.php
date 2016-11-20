@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-danger">
            <div class="panel-heading">Address and payment</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name">FirstName</label>
                            <input type="text" name="first_name" class="form-control" placeholder="First name" id="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name">
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="address">
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City">
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City">
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City">
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City">
                        </div>
                        
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>album</th>
                                    <th>Title</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$item->album->getAlbumUrl()}}" style="width: 100px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">{{$item->album->title}}</a></h4>
                                            </div>
                                        </div></td>
                                    <td>
                                    </td>
                                    <td>{{ $item->quantity }}</td>
                                    <td><strong>${{$item->album->price}}</strong></td>
                                    <td>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection