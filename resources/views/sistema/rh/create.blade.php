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
                <form class="needs-validation mb-4" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <label for="firstName" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <label for="lastName" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="firstName" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="lastName" class="form-label">RG</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="lastName" class="form-label">Contato</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span
                                    class="text-body-secondary">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="address2" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="address2" placeholder="EX.: Apartamento Nº123">
                        </div>

                        <div class="col-6">
                            <label for="address2" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="address2">
                        </div>

                        <div class="col-4">
                            <label for="address2" class="form-label">Data de assinatura</label>
                            <input type="text" class="form-control" id="address2">
                        </div>

                        <div class="col-4">
                            <label for="address2" class="form-label">Validade</label>
                            <input type="text" class="form-control" id="address2">
                        </div>

                        <div class="col-md-4">
                            <label for="zip" class="form-label">Termino do Contrato</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="address2" class="form-label">função</label>
                            <input type="text" class="form-control" id="address2">
                        </div>

                        <div class="col-6">
                            <label for="address2" class="form-label">Setor</label>
                            <input type="text" class="form-control" id="address2">
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Tipo de Contrato</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked
                                required>
                            <label class="form-check-label" for="credit">Efetivo</label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="debit">Comissionado</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="paypal">Prestador</label>
                        </div>
                    </div>

                    <hr class="my-4">
                    <button class="w-100 btn btn-success btn-lg" type="submit"><i class="fa-solid fa-user-plus me-2"></i>Salvar </button>
            </div>

            </form>
        </div>

    </main>
@endsection
