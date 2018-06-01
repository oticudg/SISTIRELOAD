<!DOCTYPE html>
<html lang="en">
    @section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
    @show
    <body class="skin-purple sidebar-mini">
        <div id="app" v-cloak>
            <div class="wrapper">
                @include('adminlte::layouts.partials.mainheader')
                @include('adminlte::layouts.partials.sidebar')
                <div class="content-wrapper">
                    
                {{--     @include('adminlte::layouts.partials.contentheader') --}}
                    <section class="content">
                        @yield('main-content')
                    </section>
                </div>
                @include('adminlte::layouts.partials.footer')
            </div>
        </div>
        @section('scripts')
        @include('adminlte::layouts.partials.scripts')
        @show      
    </body>
</html>
