@extends('layouts.app_without_nav')

@section('title') S'inscrire
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-4 col-lg-4">
                <h1 class="logo text-white text-md-center">Dev Center</h1>
                <div id="base-form" class="card">
                    <div class="card-header">Créer un compte</div>
                    <div class="card-block">
                        <div class="container">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control" name="name" placeholder="Name"
                                               value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail"
                                               value="{{ old('email') }}" required>

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
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password"
                                               name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <p class="message">Déjà inscrit? <a href="{{ url('login') }}">Connectez-vous</a></br>
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
