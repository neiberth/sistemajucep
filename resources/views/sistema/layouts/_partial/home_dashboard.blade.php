<div class="sidebar border border-right mb-0 col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active primary" aria-current="page" href="{{ route ('sistema.home') }}">
              <i class="fas fa-home primary float-left"></i>
              Home
            </a>
          </li>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ route ('usuario.index') }}">
                <i class="fas fa-user-shield primary float-left"></i>
                Administrador
              </a>
            </li>

          <li class="nav-item">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed nav-link d-flex align-items-center gap-2" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              <i class="fas fa-folder-open primary float-left"></i>
              Arquivo
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li class="nav-item">
                  <a href="{{ route('caixa.index') }}" class="nav-link d-flex align-items-center gap-2 ms-3">
                    <i class="fas fa-box primary float-left"></i>
                    Caixa
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('processo.index') }}" class="nav-link d-flex align-items-center gap-2 ms-3">
                    <i class="fas fa-copy primary float-left"></i>
                    Processo
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item" disabled>
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('leiloeiro.index') }}">
              <i class="fas fa-search primary float-left"></i>
                  Leiloeiros
            </a>
          </li>
          <li class="nav-item" disabled>
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('leiloeiro.index') }}">
              <i class="far fa-address-card primary float-left"></i>
                  Recursos Humanos
            </a>
          </li>
          {{--
            <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#graph-up"/></svg>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#puzzle"/></svg>
              Integrations
            </a>
          </li>
          --}}
        </ul>

        {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <svg class="bi"><use xlink:href="#plus-circle"/></svg>
          </a>
        </h6>
        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
              Year-end sale
            </a>
          </li>
        </ul> --}}

        {{-- <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#door-closed"/></svg>
              Sign out
            </a>
          </li>
        </ul> --}}
      </div>
    </div>
  </div>
