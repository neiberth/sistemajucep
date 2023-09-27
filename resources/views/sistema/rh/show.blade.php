@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('rh.index') }}">Recursos Humanos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perfil {{ $rh->id }}</li>
            </ol>
        </nav>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>

        <div class="col-11 flex-column flex-md-row p-0 gap-0 py-md-4 align-items-center justify-content-center">
            <div class="card  shadow-lg" data-bs-theme="light">
                <h5 class="card-header fw-bolder">Nome Completo: {{ $rh->nome }}</h5>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-2">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Matricula') }}</h5>
                            <p class="card-text">{{ $rh->matricula }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('CPF') }}</h5>
                            <p class="card-text">{{ $rh->cpf }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('RG') }}</h5>
                            <p class="card-text">{{ $rh->rg }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Telefone') }}</h5>
                            <p class="card-text">{{ $rh->telefone }}</p>
                        </div>

                        <div class="col-sm-4">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Email') }}</h5>
                            <p class="card-text">{{ $rh->email }}</p>
                        </div>

                        <div class="col-sm-7">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Endereço') }}</h5>
                            <p class="card-text">{{ $rh->endereco }}</p>
                        </div>

                        <div class="col-sm-3">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Complemento') }}</h5>
                            <p class="card-text">{{ $rh->complemento }}</p>
                        </div>

                        <div class="col-sm-2">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Município') }}</h5>
                            <p class="card-text">{{ $rh->cidades->municipio }}</p>
                        </div>

                        <div class="col-sm-4">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Data de Assinatura') }}</h5>
                            <p class="card-text">{{ $rh->data_inicio }}</p>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Validade') }}</h5>
                            <p class="card-text">{{ $rh->validade }}</p>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Data Termino') }}</h5>
                            <p class="card-text">{{ $rh->data_fim }}</p>
                        </div>

                        <div class="col-sm-4">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Setor') }}</h5>
                            <p class="card-text">{{ $rh->setor }}</p>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Função') }}</h5>
                            <p class="card-text">{{ $rh->funcao }}</p>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="card-title mb-0 fw-bolder">{{ __('Contrato') }}</h5>
                            <p class="card-text">{{ $rh->contrato }}</p>
                        </div>

                        <div class="col-sm-auto">
                            <a href="#" class="btn btn-primary mt-3">{{ __('Atualizar') }}</a>
                        </div>
                        <div class="col-sm-auto">
                            <a href="{{ route('rh.index') }}" class="btn btn-info mt-3">{{ __('Voltar') }}</a>
                        </div>
                    </div>



                </div>
            </div>

        </div>

    </main>
@endsection
