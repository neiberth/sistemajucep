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

        <form action="{{ route('rh.update', ['rh' => $rh->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-11 flex-column flex-md-row p-0 gap-0 py-md-4 align-items-center justify-content-center">
                <div class="card  shadow-lg" data-bs-theme="light">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="fw-bolder text-capitalize">Nome Completo: {{ $rh->nome }}</h5>
                            </div>
                            <div class="col-auto">
                                <fieldset class="row ">
                                    <legend class="col-form-label col-auto ms-md-auto pt-0 fw-bolder" for='status'>Status
                                    </legend>
                                    <div class="col ms-md-auto">
                                        <div class="row">
                                            <div class="col-auto ms-md-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="status" value="ativo"
                                                        {{ $rh->status == 'ativo' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status">
                                                        Ativo
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="status" value="inativo"
                                                        {{ $rh->status == 'inativo' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status">
                                                        Inativo
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">


                        <div class="row g-3">
                            <div class="col-sm-2">
                                <label class="form-label fw-bolder" for='nome'>{{ __('Matrícula') }}</label>
                                <input type="text" class="form-control" id="matricula" name="matricula"
                                    value="{{ $rh->matricula }}">
                                @if ($errors->has('matricula'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('matricula') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-sm-5">
                                <label class="form-label fw-bolder" for='nome'>{{ __('Nome Completo') }}</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    value="{{ $rh->nome }}">
                                @if ($errors->has('nome'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('nome') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-5">
                                <label class="form-label fw-bolder" for='email'>{{ __('Email') }}</label>
                                <input class="form-control" type="email" id="email" name="email"
                                    value="{{ $rh->email }}">
                                @if ($errors->has('email'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label fw-bolder" for='cpf'>{{ __('CPF') }}</label>
                                <input class="form-control" type="text" id="cpf" name="cpf"
                                    value="{{ $rh->cpf }}" OnKeyPress="formatar('###.###.###-##',this)">
                                @if ($errors->has('cpf'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('cpf') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label fw-bolder" for='rg'>{{ __('RG') }}</label>
                                <input class="form-control" type="text" id="rg" name="rg"
                                    value="{{ $rh->rg }}">
                                @if ($errors->has('rg'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('rg') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label fw-bolder" for='telefone'>{{ __('Telefone') }}</label>
                                <input class="form-control" type="text" id="telefone" name="telefone"
                                    value="{{ $rh->telefone }}" OnKeyPress="formatar('(##)#.####-#####',this)">
                                @if ($errors->has('telefone'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('telefone') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-8">
                                <label class="form-label fw-bolder" for='endereco'>{{ __('Endereço') }}</label>
                                <input class="form-control text-capitalize" type="text" id="endereco"
                                    name="endereco" value="{{ $rh->endereco }}">
                                @if ($errors->has('endereco'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('endereco') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-4">
                                <label class="form-label fw-bolder" for='complemento'>{{ __('Complemento') }}</label>
                                <input class="form-control text-capitalize" type="text" id="complemento"
                                    name="complemento" value="{{ $rh->complemento }}">
                                @if ($errors->has('complemento'))
                                    <div class="text-bg-danger ps-2 bg-opacity-75">
                                        {{ $errors->first('complemento') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-3">
                                <label for="selectCidade" class="form-label fw-bolder">{{ __('Cidade') }}</label>
                                <select class="form-select" id="selectCidade" name="cidades_id"
                                    aria-label="Default select example">
                                    <option value="{{ $rh->cidades->id }}" selected>{{ $rh->cidades->municipio }}
                                    </option>
                                    @foreach ($cidades as $cidade)
                                        <option value="{{ $cidade->id }}">{{ $cidade->municipio }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-3">
                                <label class="form-label fw-bolder"
                                    for='data_inicio'>{{ __('Data de assinatura') }}</label>
                                <input class="form-control" type="date" id="data_inicio" name="data_inicio"
                                    value="{{ $rh->data_inicio }}">
                            </div>
                            <div class="col-3">
                                <label class="form-label fw-bolder" for='validade'>{{ __('Validade') }}</label>
                                <input class="form-control text-capitalize" type="text" id="validade"
                                    name="validade" value="{{ $rh->validade }}">
                            </div>
                            <div class="col-3">
                                <label class="form-label fw-bolder" for='date_fim'>{{ __('Data de Termino') }}</label>
                                <input class="form-control" type="date" id="date_fim" name="data_fim"
                                    value="{{ $rh->data_fim }}">
                            </div>
                            <div class="col-6">
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-4 pt-0 fw-bolder" for='contrato'>Tipo de Contrato
                                    </legend>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contrato"
                                                id="contrato" value="efetivo"
                                                {{ $rh->contrato == 'efetivo' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="contrato">
                                                Efetivo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contrato"
                                                id="contrato" value="comissionado"
                                                {{ $rh->contrato == 'comissionado' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="contrato">
                                                Comissionado
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contrato"
                                                id="contrato" value="prestador"
                                                {{ $rh->contrato == 'prestador' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="contrato">
                                                Prestador de Serviços
                                            </label>
                                        </div>

                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-3">
                                <label class="form-label fw-bolder" for='funcao'>{{ __('Função') }}</label>
                                <input class="form-control text-capitalize" type="text" id="funcao" name="funcao"
                                    value="{{ $rh->funcao }}">
                            </div>
                            <div class="col-3">
                                <label class="form-label fw-bolder" for='setor'>{{ __('Setor') }}</label>
                                <input class="form-control text-uppercase" type="text" id="setor" name="setor"
                                    value="{{ $rh->setor }}">
                            </div>

                            <div class="col-auto">
                                <a href="{{ route('rh.index') }}" class="btn btn-primary "><i
                                        class="fa-solid fa-rotate-left me-1"></i>Voltar</a>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-success"><i
                                        class="fa-solid fa-user-pen me-1"></i>Atualizar</button>
                            </div>

                        </div>
        </form>

        <div class="row justify-content-end">
            <div class="col-auto ">
                <a class="btn btn-danger" href="{{ route('rh.aviso', $rh->id) }}">
                    <i class="fa-solid fa-user-slash me-1"></i>Excluir
                </a>
            </div>
        </div>

    </main>
@endsection
