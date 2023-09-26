@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Administrativo</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
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
                                        <h3>Usuário</h3>
                                        <span>adicionar / buscar / atualizar </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-auto mb-3">
                <div class="card shadow">
                    <a href="{{ route('configuracao.index') }}"class="btn btn-outline-primary p-0 m-0" aria-current="page">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-gears fa-3x float-left"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>Conf. Sistema</h3>
                                        <span>Cidade /</span>
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
