@extends('sistema.layouts.template_permission')

@section('content')
  <div class="text-center mb-5">
    <img src="{{ asset('/imagens/pemission_negada.png') }}" class="rounded" alt="..." width="250" height="250">
  </div>

  <h1>Acesso negado, você não tem permissão.</h1>
  <p class="lead">Suas credencias não te da a acesso essa página, por favor entre em contato com o seu superior.</p>
  <p class="lead">
    <a href="{{route('sistema.home')}}" class="btn btn-lg btn-light fw-bold border-white bg-white">Voltar para o Sistema</a>
  </p>
@endsection
