@extends('layouts.app_without_nav')

@section('title') Se connecter
@endsection

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-5 offset-md-4 col-lg-4">
                <h1 class="logo text-white text-md-center">Dev Center</h1>
                <div id="base-form" class="card">
                    <div class="card-header">Merci de vous connecter</div>
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
                                        <div class="checkbox message pull-right">
                                            <label>
                                                <input type="checkbox" name="remember"> Se souvenir de moi
                                            </label>
                                        </div>
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
                                        <p class="message">Pas encore inscrit?<a href="{{ url('register') }}"> Créer un compte</a></br>
                                        <a href="{{ url('/password/reset') }}">Mot de passe oublié</a></p>
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
