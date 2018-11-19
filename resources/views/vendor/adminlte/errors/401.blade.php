@extends('adminlte::layouts.errors')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.serviceunavailable') }}
@endsection
@section('main-content')
<div class="error-page">
    <h2 class="headline text-red">401</h2>
    <div class="error-content">
        <h3><i class="fa fa-warning text-red"></i> OOPS! NO TIENE PERMISOS PARA REALIZAR ESTA OPERACIÓN.</h3>
        <p>
            {{ trans('adminlte_lang::message.mainwhile') }} <a href='{{ url('/home') }}'>{{ trans('adminlte_lang::message.returndashboard') }}</a>
        </p>
        
    </div>
</div>
@endsection