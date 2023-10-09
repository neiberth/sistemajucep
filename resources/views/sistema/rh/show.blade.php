@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('rh.index') }}">Funcionário</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perfil {{ $rh->id }}</li>
            </ol>
        </nav>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>

        <div class="col-11 flex-column flex-md-row p-0 gap-0 py-md-4 align-items-center justify-content-center">
            <div class="card  shadow-lg" data-bs-theme="light">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="fw-bolder text-capitalize">Nome Completo: {{ $rh->nome }}</h5>
                        </div>
                        <div class="col-6 text-end">
                            <div class="row">
                                <div class="col-auto  ms-md-auto">
                                    <h5 class="fw-bolder text-capitalize">Status: </h5>
                                </div>
                                <div class="col-auto me-5">
                                    @if ($rh->status == 'inativo')
                                        <h5 class="fw-bolder text-capitalize text-danger">{{ $rh->status }}</h5>
                                    @else
                                        <h5 class="fw-bolder text-capitalize text-success">{{ $rh->status }}</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row g-3">
                        <div class="col-sm-2">
                            <label class="form-label fw-bolder">{{ __('Matrícula') }}</label>
                            <input class="form-control" value="{{ $rh->matricula }}" disabled>
                        </div>

                        <div class="col-sm-5">
                            <label class="form-label fw-bolder">{{ __('Nome Completo') }}</label>
                            <input class="form-control text-capitalize" value="{{ $rh->nome }}" disabled>
                        </div>

                        <div class="col-5">
                            <label class="form-label fw-bolder">{{ __('Email') }}</label>
                            <input class="form-control " value="{{ $rh->email }}" disabled>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label fw-bolder">{{ __('CPF') }}</label>
                            <input class="form-control" value="{{ $rh->cpf }}" disabled>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label fw-bolder">{{ __('RG') }}</label>
                            <input class="form-control" value="{{ $rh->rg }}" disabled>
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label fw-bolder">{{ __('Telefone') }}</label>
                            <input class="form-control"value="{{ $rh->telefone }}" disabled>
                        </div>

                        <div class="col-8">
                            <label class="form-label fw-bolder">{{ __('Endereço') }}</label>
                            <input class="form-control text-capitalize" value="{{ $rh->endereco }}" disabled>
                        </div>

                        <div class="col-4">
                            <label class="form-label fw-bolder">{{ __('Complemento') }}</label>
                            <input class="form-control text-capitalize"value="{{ $rh->complemento }}" disabled>
                        </div>

                        <div class="col-3">
                            <label class="form-label fw-bolder">{{ __('Município') }}</label>
                            <input class="form-control text-capitalize"value="{{ $rh->cidades->municipio }}" disabled>
                        </div>
                        <div class="col-2">
                            <label class="form-label fw-bolder">{{ __('Data de assinatura') }}</label>
                            <input class="form-control"value="{{ $rh->data_inicio }}" disabled>
                        </div>
                        <div class="col-2">
                            <label class="form-label fw-bolder">{{ __('Validade') }}</label>
                            <input class="form-control text-capitalize" value="{{ $rh->validade }}" disabled>
                        </div>
                        <div class="col-2">
                            <label class="form-label fw-bolder">{{ __('Data de Termino') }}</label>
                            <input class="form-control"value="{{ $rh->data_fim }}" disabled>
                        </div>
                        <div class="col-3">
                            <label class="form-label fw-bolder">{{ __('Tipo de Contrato') }}</label>
                            <input class="form-control text-capitalize"value="{{ $rh->contrato }}" disabled>
                        </div>

                        <div class="col-6">
                            <label class="form-label fw-bolder">{{ __('Função') }}</label>
                            <input class="form-control text-capitalize" value="{{ $rh->funcao }}" disabled>
                        </div>
                        <div class="col-6">
                            <label class="form-label fw-bolder">{{ __('Setor') }}</label>
                            <input class="form-control text-uppercase" value="{{ $rh->setor }}" disabled>
                        </div>

                        <div class="col-auto">
                            <a href="{{ route('rh.index') }}" class="btn btn-primary "><i
                                    class="fa-solid fa-rotate-left me-1"></i>Voltar</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-success"><i
                                    class="fa-solid fa-user-pen me-1"></i></i>Atualizar</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>
@endsection
