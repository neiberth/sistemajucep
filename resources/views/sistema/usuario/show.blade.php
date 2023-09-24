@extends('sistema.layouts.template_home')

@section('content')
<main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('usuario.index') }}">Usuário</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $usuario->id }}</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ficha do Usuário</h1>
    </div>

    <div class="col-9 flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
        <div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="light">
          <nav class="col-6">
            <ul class="list-unstyled d-flex flex-column gap-3">
              <li>
                <div class="d-flex align-items-start  text-start">
                    <div>
                        <p class="fs-4 mb-1 ms-3 d-block fw-bolder me-4">Nome Completo
                            <a type="button" href="{{ route('usuario.edit', $usuario->id) }}" class="w-10 btn btn-lg btn-outline-primary my-0 ms-3"><i class="bi bi-person-vcard me-2 my-0"></i>Editar</a>
                        </p>
                      <p class="fs-5 mb-1 ms-3 d-block">{{$usuario->name}}</p>
                    </div>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-start  text-start">
                  <div>
                    <p class="fs-4 mb-1 ms-3 d-block fw-bolder">Email</p>
                      <p class="fs-5 mb-1 ms-3 d-block">{{$usuario->email}}</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-start  text-start">
                  <div>
                    <p class="fs-4 mb-1 ms-3 d-block fw-bolder">Login</p>
                      <p class="fs-5 mb-1 ms-3 d-block">{{$usuario->login}}</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-start  text-start">
                  <div>
                    <p class="fs-4 mb-1 ms-3 d-block fw-bolder">Criação</p>
                      <p class="fs-5 mb-1 ms-3 d-block">{{$usuario->created_at}}</p>

                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <div class="d-none d-lg-block vr mx-4 opacity-10">&nbsp;</div>
          <hr class="d-lg-none">
          <div class="col-2 pe-3">
            <nav>
              <ul class="d-flex flex-column gap-2 list-unstyled small">
                <li>
                  <div class="d-flex align-items-start  text-start">
                    <div>
                      <p class="fs-4 mb-1 ms-3 d-block fw-bolder">Permissões</p>

                    </div>
                  </div>
                </li>
                @if (($usuario->admin == 1))
                <li><div class="dropdown-item d-flex align-items-center gap-2 pt-0 fs-5">
                  <span class="d-inline-block bg-primary rounded-circle p-1"></span>
                  Administrador
                </div></li>
                @endif
                @if (($usuario->arquivo == 1))
                <li><div class="dropdown-item d-flex align-items-center gap-2 pt-0 fs-5">
                  <span class="d-inline-block bg-primary rounded-circle p-1"></span>
                  Arquivo
                </div></li>
                @endif
                @if (($usuario->leiloeiro == 1))
                <li><div class="dropdown-item d-flex align-items-center gap-2 pt-0 fs-5">
                  <span class="d-inline-block bg-primary rounded-circle p-1"></span>
                  Leiloeiro
                </div></li>
                @endif
                @if (($usuario->rh == 1))
                <li><div class="dropdown-item d-flex align-items-center gap-2 pt-0 fs-5">
                  <span class="d-inline-block bg-primary rounded-circle p-1"></span>
                  RH
                </div></li>
                @endif

              </ul>
            </nav>
          </div>
        </div>

      </div>

</main>
@endsection
