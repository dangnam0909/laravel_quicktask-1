@if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
@if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
@if ($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
@endif
@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if (session('resent'))
    <div class="alert alert-success" role="alert">
        @lang('auth.msverifyemail')
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>@lang('home.messageerror')</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('messageD'))
    <div class="alert alert-danger alert-dismissible fade show col col-8" role="alert">
        <strong>{{ Session::get('messageD') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
