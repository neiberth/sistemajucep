@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-auto ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-0 mt-1 mb-3 border-bottom">
            <h1 class="h2">Pagina Principal</h1>
        </div>

        <div class="row row-cols-1 row-cols-md-3 mb-3">
            <div class="col-auto mb-3">
                <div class="card shadow">
                    <a href="{{ route ('usuario.index') }}"class="btn btn-outline-primary p-0 m-0" aria-current="page">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fas fa-user-shield fa-3x float-left"></i>
                                    </div>
                                    <div class="col-auto text-end" >
                                        <h3>administrador</h3>
                                        <span>Adm do Sistema</span>
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
                                        <h3>Arquivos</h3>
                                        <span>Empresa / Processo / Caixa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-auto mb-3">
                <div class="card shadow">
                    <a href="{{ route('leiloeiro.index') }}"class="btn btn-outline-primary p-0 m-0" aria-current="page">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fas fa-search fa-3x float-left"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>Leiloeiros</h3>
                                        <span>Cadastro dos Leiloeiros</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-auto mb-3">
                <div class="card shadow">
                    <a href="#" type="button" class="btn btn-outline-primary p-0 m-0" aria-current="page">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="far fa-address-card fa-3x float-left"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>Recursos Humanos</h3>
                                        <span>Cadastro dos Colaboradores</span>
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
