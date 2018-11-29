<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header text-center">Menú de navegación</li>
            <li class="{!! Request::is('home') ? 'active' : '' !!}"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>Tablero de inicio</span></a></li>
            <li class="{!! Request::is('indexes') ? 'active' : '' !!}"><a href="{{ url('indexes') }}"><i class='fa fa-file-text text-aqua'></i> <span> Viejas historias</span></a></li>
            <li class="{!! Request::is('newindexes') ? 'active' : '' !!}"><a href="{{ url('newindexes') }}"><i class='fa fa-file-text text-teal'></i> <span> Nuevas historias</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart text-yellow"></i>
                    <span>Estadísticas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('sexchart') }}"><i class="fa fa-venus-mars text-purple"></i> Sexo</a></li>
                    <li><a href="{{ url('triagechart') }}"><i class="fa fa-hospital-o text-primary"></i> Triaje</a></li>
                    <li><a href="{{ url('docchart') }}"><i class="fa fa-wheelchair text-danger"></i> Documentación</a></li>
                </ul>
            </li>
            @if(Auth::user()->admin())
            <li class="{!! Request::is('user') ? 'active' : '' !!}"><a href="{{ url('user') }}"><i class='fa fa-users text-red'></i> <span> Usuarios</span></a></li>
            @endif
            <li class="treeview">
                <a href="#">
                    <i class='glyphicon glyphicon-question-sign text-green'></i>
                    <span>Ayuda</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li><a href="{{asset('pdf/manual'.Auth::user()->type.'.pdf')}}" target="_blank"><i class='fa fa-book text-blue'></i> <span> Manual de usuario</span></a></li> --}}
                    <li><a href="{{asset('pdf/consultaparroquial.pdf')}}" target="_blank"><i class="fa fa-map text-info"></i> Consulta parroquial</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
