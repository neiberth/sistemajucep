@extends('sistema.layouts.template_home')

@section('content')
<main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Leiloeiro</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Leiloeiro</h1>
    </div>


</main>
@endsection
