@extends('layouts.app_without_nav')

        <!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-4 col-lg-4">
                <h1 class="logo text-white text-md-center">Dev Center</h1>
                <div id="base-form" class="card">
                    <div class="card-header">Réinintialiser le mot de passe</div>
                    <div class="card-block">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/password/email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail adress"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Send Password Reset Link
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <p class="message"><a href="{{ url('login') }}">Annuler</a></br>
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
