<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- Sidebar Menu -->
     <ul class="sidebar-menu">
            <li class="header text-center">Menu de navegacion</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ url('indexes') }}"><i class='fa fa-file-text text-aqua'></i> <span> Historias</span></a></li>
            <li><a href="{{ url('users') }}"><i class='fa fa-users text-yellow'></i> <span> Usuarios</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-bar-chart text-red'></i> <span> Estadisticas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
