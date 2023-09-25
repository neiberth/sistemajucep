<div class="sidebar border border-right mb-0 col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active primary" aria-current="page"
                        href="{{ route('sistema.home') }}">
                        <i class="fas fa-home primary float-left"></i>
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                        href="{{ route('usuario.index') }}">
                        <i class="fas fa-user-shield primary float-left"></i>
                        Administrador
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                        href="{{ route('sistema.arquivo') }}">
                        <i class="fas fa-folder-open primary float-left"></i>
                        Arquivos
                    </a>
                </li>

                <li class="nav-item" disabled>
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('leiloeiro.index') }}">
                        <i class="fas fa-search primary float-left"></i>
                        Leiloeiros
                    </a>
                </li>
                <li class="nav-item" disabled>
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('rh.index') }}">
                        <i class="far fa-address-card primary float-left"></i>
                        Recursos Humanos
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
