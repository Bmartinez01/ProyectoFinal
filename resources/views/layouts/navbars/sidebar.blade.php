<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal text-info">
      {{ __('MERSOFT') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Menú') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'recent_actors' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#configuraciones" aria-expanded="true">
        <i class="material-icons">settings_suggest</i>
          <p>{{ __('Configuraciones') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="configuraciones">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">recent_actors</i>
                  <p>{{ __('Roles') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#usuarios" aria-expanded="true">
          <i class="material-icons">person</i>
            <p>{{ __('Usuarios') }}
              <b class="caret"></b>
            </p>
        </a>
        <div class="collapse show" id="usuarios">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('users.index')}}">
                <i class="material-icons">account_circle</i>
                  <p>{{ __('Usuario') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Compras" aria-expanded="true">
          <i class="material-icons">shopping_bag</i>
            <p>{{ __('Compras') }}
              <b class="caret"></b>
            </p>
        </a>
        <div class="collapse show" id="Compras">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">settings_accessibility</i>
                  <p>{{ __('Proveedores') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">shopping_basket</i>
                <p>{{ __('Compras') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'categorias' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('categorias.index')}}">
                <i class="material-icons">receipt_long</i>
                  <p>{{ __('Categorias') }}</p>
              </a>
            </li>


            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">view_in_ar</i>
                  <p>{{ __('Productos') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Ventas" aria-expanded="true">
          <i class="material-icons">person</i>
            <p>{{ __('Ventas') }}
              <b class="caret"></b>
            </p>
        </a>
        <div class="collapse show" id="Ventas">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('clientes.index')}}">
                <i class="material-icons">supervisor_account</i>
                  <p>{{ __('Clientes') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">shopping_cart</i>
                <p>{{ __('Pedidos') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">currency_exchange</i>
                <p>{{ __('Ventas') }}</p>
              </a>
            </li>

          </ul>
        </div>
      </li>



    </ul>
  </div>
</div>
