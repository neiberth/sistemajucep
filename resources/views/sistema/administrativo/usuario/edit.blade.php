@extends('sistema.layouts.template_home')

@section('content')
<main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('usuario.index') }}">Usuário</a></li>
            <li class="breadcrumb-item active" aria-current="page">edite: {{ $usuario->id }}</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
      <h2>Editar Perfil</h2>
    </div>

    <div class="container">
        <div class="row justify-content-start mb-5">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <p class="mb-0 fs-5 fw-bolder">{{ $usuario->name }}</p>
                    </div>

                    <div class="card-body">
                    <form action="{{ route('usuario.update', ['usuario' => $usuario->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome Completo') }}</label>
                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Login') }}</label>
                            <div class="col-md-5">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ $usuario->login }}" required autocomplete="login">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ $usuario->email }}" value="{{ $usuario->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Nova Senha') }}</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ $usuario->password }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="row mb-3">

                        <div class="position-static d-flex flex-column  p-3 rounded-3" data-bs-theme="light">
                            <div class="row row-cols-1 row-cols-md-3 gx-4 text-center mb-3">
                                <div class="col-md-6 themed-grid-col"><p class="fs-6 fw-semibold">Permissões</p></div>
                                <div class="col-md-3 themed-grid-col"><p class="fs-6 fw-semibold">SIM</p></div>
                                <div class="col-md-3 themed-grid-col"><p class="fs-6 fw-semibold">NÃO</p></div>

                                <div class="col-md-6 themed-grid-col bg-dark-subtle">Administrador</div>
                                <div class="col-md-3 themed-grid-col bg-dark-subtle">
                                    <input class="form-check-input" type="radio" name="admin" id="admin" value="1" {{($usuario->admin == 1)? 'checked': '' }}>
                                </div>
                                <div class="col-md-3 themed-grid-co bg-dark-subtle">
                                    <input class="form-check-input" type="radio" name="admin" id="admin" value="0" {{($usuario->admin == 0)? 'checked': '' }}>
                                </div>

                                <div class="col-md-6 themed-grid-col bg-body-secondary">Arquivo</div>
                                <div class="col-md-3 themed-grid-col bg-body-secondary">
                                    <input class="form-check-input" type="radio" name="arquivo" id="arquivo" value="1" {{($usuario->arquivo == 1)? 'checked': '' }}>
                                </div>
                                <div class="col-md-3 themed-grid-col bg-body-secondary">
                                    <input class="form-check-input" type="radio" name="arquivo" id="arquivo" value="0" {{($usuario->arquivo == 0)? 'checked': '' }}>
                                </div>

                                <div class="col-md-6 themed-grid-col bg-body-secondary">RH</div>
                                <div class="col-md-3 themed-grid-col bg-body-secondary">
                                    <input class="form-check-input" type="radio" name="rh" id="rh" value="1" {{($usuario->rh == 1)? 'checked': '' }}>
                                </div>
                                <div class="col-md-3 themed-grid-col bg-body-secondary">
                                    <input class="form-check-input" type="radio" name="rh" id="rh" value="0" {{($usuario->rh == 0)? 'checked': '' }}>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Atualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection
