<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header text-center">Menu de navegacion</li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ url('indexes') }}"><i class='fa fa-file-text text-aqua'></i> <span> Historias</span></a></li>
           {{--  <li><a href="{{ url('users') }}"><i class='fa fa-users text-yellow'></i> <span> Usuarios</span></a></li> --}}
            <li class="treeview">
                <a href="#"><i class='fa fa-bar-chart text-red'></i> <span> Estadisticas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
            <li><a href="{{ url('indexes') }}"><i class='fa fa-file-pdf-o text-aqua'></i> <span> Reportes</span></a></li>
        </ul>
    </section>
</aside>
