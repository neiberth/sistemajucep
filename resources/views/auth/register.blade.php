@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow bg-body-tertiary rounded">
                <div class="card-header text-bg-primary">
                    <p class="mb-0 fw-medium">{{ __('Novo Usuário') }}</p>
                </div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <hr >

                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Login') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme a Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <hr class="row mb-0">
                        <div class="row mb-1">
                            <h3 class="col-md-7 col-form-label text-md-end">SIM</h3>
                            <h3 class="col-md-4 col-form-label text-md-start">NÃO</h3>
                        </div>

                        <div class="row mb-3">
                            <h3 class="col-md-4 col-form-label text-md-end">{{ __('Permissões') }}</h3>
                            <div class="col-md-6">
                                <div class="row mb-1 ">
                                    <div class="form-check px-1 mx-1 col-md-8 col-form-check">
                                        <label class="form-check-label text-md-start" for="admin">Administrador</label>
                                        <input class="form-check-input" type="radio" name="admin" id="admin" value="0" style="float: right; margin-right: 2.5em;" checked>
                                        <input class="form-check-input" type="radio" name="admin" id="admin" value="1" style="float: right; margin-right: 3.5em;"disabled>
                                    </div>
                                </div>
                                <div class="row mb-1 ">
                                    <div class="form-check px-1 mx-1 col-md-8 col-form-check">
                                        <label class="form-check-label text-md-start" for="arquivo">Arquivo</label>
                                        <input class="form-check-input" type="radio" name="arquivo" id="arquivo" value="0" checked style="float: right; margin-right: 2.5em;">
                                        <input class="form-check-input" type="radio" name="arquivo" id="arquivo" value="1" style="float: right; margin-right: 3.5em;">
                                    </div>
                                </div>
                                <div class="row mb-1 ">
                                    <div class="form-check px-1 mx-1 col-md-8 col-form-check">
                                        <label class="form-check-label text-md-start" for="rh">RH</label>
                                        <input class="form-check-input" type="radio" name="rh" id="rh" value="0" checked style="float: right; margin-right: 2.5em;">
                                        <input class="form-check-input" type="radio" name="rh" id="rh" value="1" style="float: right; margin-right: 3.5em;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
