<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header text-center">Menu de navegacion</li>
            <li class="{!! Request::is('home') ? 'active' : '' !!}"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="{!! Request::is('indexes') ? 'active' : '' !!}"><a href="{{ url('indexes') }}"><i class='fa fa-file-text text-aqua'></i> <span> Historias</span></a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart text-yellow"></i>
                <span>Estadisticas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('sexchart') }}"><i class="fa fa-venus-mars text-purple"></i> Por sexo</a></li>
                <li><a href="{{ url('triagechart') }}"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            @if(Auth::user()->admin())
            <li class="{!! Request::is('user') ? 'active' : '' !!}"><a href="{{ url('user') }}"><i class='fa fa-users text-red'></i> <span> Usuarios</span></a></li>
            @endif
            <li class=""><a href="{{asset('pdf/manual'.Auth::user()->type.'.pdf')}}" target="_blank"><i class='glyphicon glyphicon-question-sign text-teal'></i> <span> Ayuda</span></a></li>
        </ul>
    </section>
</aside>
