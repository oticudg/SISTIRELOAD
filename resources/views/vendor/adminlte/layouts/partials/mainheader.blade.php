<header class="main-header">
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="/img/sisti32x32.png"></span>
        <!-- logo for regular state and mobile devices -->
        <img src="/img/sistinav.png">
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
    </a>
    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="fa fa-user"></span>
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    <span class="caret"></span></a>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('changePassword') }}" data-toggle="modal"><span class="fa fa-cogs text-purple"></span> Cambiar contraseña</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"  id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-sign-out text-purple"></span> Cerrar sesion</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                <input type="submit" value="logout" style="display: none;">
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>