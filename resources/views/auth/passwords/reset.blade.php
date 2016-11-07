@extends('layouts.app_without_nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-4 col-lg-4">
                <h1 class="logo text-white text-md-center">Dev Center</h1>
                <div id="base-form" class="card">
                    <div class="card-header">Reset Password</div>
                    <div class="card-block">
                        <div class="container">
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/password/reset') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail adress"
                                               value="{{ $email or old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} row">
                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password"
                                               name="password_confirmation" required>

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Reset Password
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <p class="message"><a href="{{ url('/') }}">Annuler</a></br>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
