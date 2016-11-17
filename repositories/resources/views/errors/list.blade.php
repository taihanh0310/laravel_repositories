@if($errors->any())
    <div class="container">
    <div class="row">
        <div class="alert alert-danger alert-dismissible fade in col-sm-12" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Whoops!</strong> There were some problems with your input.
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
@endif

@if($message = Session::get('success'))
    <div class="container">
    <div class="row">
        <div class="alert alert-success alert-dismissible fade in col-sm-12" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong> {{ $message }} </strong>
        </div>
    </div>
    </div>
@endif
