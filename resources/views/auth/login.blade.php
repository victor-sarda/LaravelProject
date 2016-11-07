@extends('layouts.app_without_nav')

@section('title') Se connecter
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h1 class="logo text-white text-md-center">Dev Center</h1>
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-block">
                        <div class="container">
                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail"
                                               value="{{ old('email') }}" required autofocus>

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

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary col-md-12">
                                            Login
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                            <a class="btn btn-link col-md-12" href="{{ url('/password/reset') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
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
