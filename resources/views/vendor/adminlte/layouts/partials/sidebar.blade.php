<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header text-center">Menu de navegacion</li>
            <li class="{!! Request::is('home') ? 'active' : '' !!}"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="{!! Request::is('indexes') ? 'active' : '' !!}"><a href="{{ url('indexes') }}"><i class='fa fa-file-text text-aqua'></i> <span> Historias</span></a></li>
         
            <li class="{!! Request::is('chart') ? 'active' : '' !!}"><a href="{{ url('chart') }}"><i class='fa fa-bar-chart text-yellow'></i> <span> Estadisticas</span></a></li>
            <li class="{!! Request::is('user') ? 'active' : '' !!}"><a href="{{ url('user') }}"><i class='fa fa-users text-red'></i> <span> Usuarios</span></a></li>
        </ul>
    </section>
</aside>
