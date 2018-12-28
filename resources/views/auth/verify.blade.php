@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('auth.verifyemail')</div>

                <div class="card-body">
                    @include('common.errors')

                    @lang('auth.msverifyemail1')
                    @lang('auth.msverifyemail2'), <a href="{{ route('verification.resend') }}">@lang('auth.msverifyemail3')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
