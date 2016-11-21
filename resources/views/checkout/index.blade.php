@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-danger">
            <div class="panel-heading">Address and payment</div>
            <div class="panel-body">
                <form action="{{ route('checkout.store') }}" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="first_name">FirstName</label>
                                <input type="text" name="first_name" class="form-control" placeholder="First name" id="first_name" value="{{ $user->name }}" readonly="readonly">
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
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder="state">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="postal_code">Postal Code</label>
                                <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="postal_code">
                            </div>
                            
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control" placeholder="country" value="vn">
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" id="phone" class="form-control" placeholder="phone" value="0123456789">
                            </div>
                            <div class="form-group">
                                <label for="email">Mail Address</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email" value="{{ $user->email }}" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="text" name="total" id="total" class="form-control" placeholder="Total" readonly="readonly" value="{{ $cart->getTotalPrice() }}">
                                <input type="hidden" name="order_date" value="{{ $checkout_date }}">
                                <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                <input type="hidden" name="user_name" value="{{ $user->email }}">
                                {{ csrf_field() }}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>album</th>
                                        <th>Title</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Price</th>
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
                    <div class="row">
                        <div class="form-group col-sm-12">
                                <button type="submit">Save</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection