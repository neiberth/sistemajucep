@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('rh.index') }}">Funcionário</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </nav>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>

        <div class="row g-5 ms-3">

            <div class="col-md-7 col-lg-8 shadow mb-5">
                <h4 class="mb-3">Fixa do Colaborador</h4>

                <form class="needs-validation mb-4" method="POST" action="{{ route('rh.store') }}" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <label for="matricula" class="form-label">{{ __('Matrícula') }}</label>
                            <input type="text" class="form-control" id="matricula" placeholder="Matrícula"
                                name="matricula" required autocomplete="matricula" autofocus>
                            @if ($errors->has('matricula'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('matricula') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-9">
                            <label for="nome" class="form-label">{{ __('Nome Completo') }}</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome Completo"
                                name="nome" required autocomplete="nome">
                            @if ($errors->has('nome'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('nome') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-4">
                            <label for="cpf" class="form-label">{{ __('CPF') }}</label>
                            <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf"
                                maxlength="14" required autocomplete="cpf" OnKeyPress="formatar('###.###.###-##',this)">
                            @if ($errors->has('cpf'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('cpf') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-4">
                            <label for="rg" class="form-label">{{ __('RG') }}</label>
                            <input type="text" class="form-control" id="rg" placeholder="RG" name="rg"
                                required autocomplete="rg">
                            @if ($errors->has('rg'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('nome') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-4">
                            <label for="telefone" class="form-label">{{ __('Telefone') }}</label>
                            <input type="text" class="form-control" id="telefone" placeholder="(99)9.9999-9999"
                                maxlength="15" name="telefone" required autocomplete="telefone"
                                OnKeyPress="formatar('(##)#.####-#####',this)">
                            @if ($errors->has('telefone'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('telefone') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">{{ __('Email') }}<span
                                    class="text-body-secondary">(Optional)</span></label>
                            <input id="email" type="email" class="form-control" name="email"required
                                autocomplete="email" placeholder="you@example.com">
                            @if ($errors->has('email'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="endereco" class="form-label">{{ __('Endereço') }}</label>
                            <input type="text" class="form-control" id="endereco" placeholder="Rua ..."
                                name="endereco"required autocomplete="endereco">
                            @if ($errors->has('endereco'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('endereco') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-6">
                            <label for="complemento" class="form-label">{{ __('Complemento') }}</label>
                            <input type="text" class="form-control" id="complemento" placeholder="EX.: apt 000"
                                name="complemento" required autocomplete="complemento">
                            @if ($errors->has('complemento'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('complemento') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-6">
                            <label for="municipio" class="form-label" for="municipio">{{ __('Cidade') }}</label>
                            <select class="form-select" id="selectCaixa" name="cidades_id"
                                aria-label="Default select example">
                                <option selected>Cidade</option>
                                @foreach ($cidades as $cidade)
                                    <option value="{{ $cidade->id }}">{{ $cidade->municipio }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('municipio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <label for="data_inicio" class="form-label">{{ __('Data de assinatura') }}</label>
                            <input type="date" class="form-control" id="data_inicio" placeholder="00/00/0000"
                                name="data_inicio" value="{{ old('data_inicio') }}" required autocomplete="data_inicio">
                            @if ($errors->has('data_inicio'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('data_inicio') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-4">
                            <label for="validade" class="form-label">{{ __('Validade') }}</label>
                            <input type="text" class="form-control" id="validade" placeholder="EX.: 1 ano"
                                name="validade" value="{{ old('validade') }}" required autocomplete="validade">
                            @if ($errors->has('validade'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('validade') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-4">
                            <label for="data_fim" class="form-label">{{ __('Data de Termino') }}</label>
                            <input type="date" class="form-control" id="data_fim" placeholder="00/00/0000"
                                name="data_fim" value="{{ old('data_fim') }}" required autocomplete="data_fim">
                            @if ($errors->has('data_fim'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('data_fim') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-4">
                            <label for="funcao" class="form-label">{{ __('Função') }}</label>
                            <input type="text" class="form-control" id="funcao" placeholder="" name="funcao"
                                value="{{ old('funcao') }}" required autocomplete="funcao">
                            @if ($errors->has('funcao'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('funcao') }}
                                </div>
                            @endif
                        </div>

                        <div class="col-4">
                            <label for="setor" class="form-label">{{ __('Setor') }}</label>
                            <input type="text" class="form-control text-uppercase" id="setor" placeholder=""
                                name="setor" value="{{ old('setor') }}" required autocomplete="setor">
                            @if ($errors->has('setor'))
                                <div class="text-bg-danger ps-2 bg-opacity-75">
                                    {{ $errors->first('setor') }}
                                </div>
                            @endif
                        </div>

                         <div class="col-4 ">
                            <label for="setor" class="form-label">{{ __('Status') }}</label>
                            <div class="row text-end">
                                <div class="col-auto mt-2 ">
                                    <div class="form-check">
                                        <input id="status" name="status" type="radio" class="form-check-input"
                                            value="ativo" required>
                                        <label class="form-check-label text-md-start fw-semibold"
                                            for="status">{{ __('Ativo') }}</label>

                                    </div>
                                </div>

                                <div class="col-auto mt-2">
                                    <div class="form-check">
                                        <input id="status" name="status" type="radio" class="form-check-input"
                                            value="inativo" required>
                                        <label class="form-check-label text-md-start fw-semibold"
                                            for="status">{{ __('Inativo') }}</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Tipo de Contrato</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="contrato" name="contrato" type="radio" class="form-check-input"
                                value="efetivo" required>
                            <label class="form-check-label text-md-start fw-semibold"
                                for="contrato">{{ __('Efetivo') }}</label>

                        </div>
                        <div class="form-check">
                            <input id="contrato" name="contrato" type="radio" class="form-check-input"
                                value="comissionado" required>
                            <label class="form-check-label text-md-start fw-semibold"
                                for="contrato">{{ __('Comissionado') }}</label>
                        </div>
                        <div class="form-check">
                            <input id="contrato" name="contrato" type="radio" class="form-check-input"
                                value="prestador" required>
                            <label class="form-check-label text-md-start fw-semibold"
                                for="contrato">{{ __('Prestador') }}</label>
                        </div>
                    </div>

                    <hr class="my-4">
                    <button class="w-100 btn btn-success btn-lg" type="submit">
                        <i class="fa-solid fa-user-plus me-2"></i>{{ __('Salvar') }}
                    </button>


                </form>
            </div>
        </div>

    </main>
@endsection
