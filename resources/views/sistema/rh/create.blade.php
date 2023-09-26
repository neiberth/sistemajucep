@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('rh.index') }}">Recursos Humanos</a></li>
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
                            <label for="matricula"
                                class="form-label @error('matricula') is-invalid @enderror">{{ __('Matrícula') }}</label>
                            <input type="text" class="form-control" id="matricula" placeholder="Matrícula"
                                name="matricula" value="{{ old('matricula') }}" required autocomplete="matricula" autofocus>
                            <div class="invalid-feedback">
                                @error('matricula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <label for="nome" class="form-label">{{ __('Nome Completo') }}</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome Completo"
                                name="nome" value="{{ old('nome') }}" required autocomplete="nome">
                            <div class="invalid-feedback">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="cpf" class="form-label">{{ __('CPF') }}</label>
                            <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf"
                                value="{{ old('cpf') }}" required autocomplete="cpf">
                            <div class="invalid-feedback">
                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="rg" class="form-label">{{ __('RG') }}</label>
                            <input type="text" class="form-control" id="rg" placeholder="RG" name="rg"
                                value="{{ old('rg') }}" required autocomplete="rg">
                            <div class="invalid-feedback">
                                @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="telefone" class="form-label">{{ __('Telefone') }}</label>
                            <input type="text" class="form-control" id="telefone" placeholder="(83)9 0000-0000"
                                name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">
                            <div class="invalid-feedback">
                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">{{ __('Email') }}<span
                                    class="text-body-secondary">(Optional)</span></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="you@example.com">
                            <div class="invalid-feedback">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="endereco" class="form-label">{{ __('Endereço') }}</label>
                            <input type="text" class="form-control" id="endereco" placeholder="Rua ..."
                                name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">
                            <div class="invalid-feedback">
                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="complemento" class="form-label">{{ __('Complemento') }}</label>
                            <input type="text" class="form-control" id="complemento" placeholder="EX.: apt 000"
                                name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento">
                            <div class="invalid-feedback">
                                @error('complemento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="cidade" class="form-label">{{ __('Cidade') }}</label>
                            <input type="text" class="form-control" id="cidade" placeholder="João Pessoa"
                                name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade">
                            <div class="invalid-feedback">
                                @error('cidade')
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
                            <div class="invalid-feedback">
                                @error('data_inicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <label for="validade" class="form-label">{{ __('Validade') }}</label>
                            <input type="text" class="form-control" id="validade" placeholder="EX.: 1 ano"
                                name="validade" value="{{ old('validade') }}" required autocomplete="validade">
                            <div class="invalid-feedback">
                                @error('validade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <label for="data_fim" class="form-label">{{ __('Data de Termino') }}</label>
                            <input type="date" class="form-control" id="data_fim" placeholder="00/00/0000"
                                name="data_fim" value="{{ old('data_fim') }}" required autocomplete="data_fim">
                            <div class="invalid-feedback">
                                @error('data_fim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="funcao" class="form-label">{{ __('Função') }}</label>
                            <input type="text" class="form-control" id="funcao" placeholder="" name="funcao"
                                value="{{ old('funcao') }}" required autocomplete="funcao">
                            <div class="invalid-feedback">
                                @error('funcao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="setor" class="form-label">{{ __('Setor') }}</label>
                            <input type="text" class="form-control" id="setor" placeholder="" name="setor"
                                value="{{ old('setor') }}" required autocomplete="setor">
                            <div class="invalid-feedback">
                                @error('setor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
