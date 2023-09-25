@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Arquivo</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Arquivo</h1>
        </div>

        <div class="row row-cols-1 row-cols-md-4 mb-3">

            <div class="col-auto mb-3">
                <div class="card shadow ">
                    <a href="{{ route('sistema.arquivo') }}"class="btn btn-outline-primary p-0 m-0" aria-current="page">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fas fa-building fa-3x float-left"></i>
                                    </div>
                                    <div class="col-auto text-end">
                                        <h3>Empresa</h3>
                                        <span>Lista das Empresas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-auto mb-3">
                <div class="card shadow">
                    <a href="{{ route('processo.index') }}"class="btn btn-outline-primary p-0 m-0" aria-current="page">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fas fa-folder-open fa-3x float-left"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>Processo</h3>
                                        <span>Lista dos Processo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-auto mb-3">
                <div class="card shadow">
                    <a href="{{ route('caixa.index') }}"class="btn btn-outline-primary p-0 m-0" aria-current="page">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fas fa-archive fa-3x float-left"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>Caixa</h3>
                                        <span>Lista das Caixas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>


    </main>
@endsection
