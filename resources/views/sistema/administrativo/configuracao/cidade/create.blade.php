@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('administrativo.index') }}">Administrativo</a></li>
                <li class="breadcrumb-item"><a href="{{ route('configuracao.index') }}">Configuração</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cidade.index') }}">Cidade</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>

        <div class="container mb-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow bg-body-tertiary rounded">
                        <div class="card-header text-bg-primary">
                            <p class="mb-0 fw-medium">{{ __('Novo Usuário') }}</p>
                        </div>
    
                        <div class="card-body ">
                            <form method="POST" action="{{ route('cidade.store') }}">
                                @csrf
    
                                <div class="row mb-3">
                                    <label for="municipio" class="col-md-4 col-form-label text-md-end">{{ __('Nome do Município') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="municipio" type="text" class="form-control text-capitalize @error('municipio') is-invalid @enderror" name="municipio" value="{{ old('municipio') }}" required autocomplete="municipio" autofocus>
                                        @if ($errors->has('municipio'))
                                            <div class="text-bg-danger ps-2 bg-opacity-75" role="alert">
                                                <strong>{{ $errors->first('municipio') }}</strong>
                                            </div>
                                        @endif
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


    </main>
@endsection
