@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="box box-default">
    <div class="box-header with-border text-center">
        <h3 class="box-title">Cambio de contraseña</h3>
    </div>
    <div class="box-body">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form method="POST" action="{{ route('changePassword') }}">
            {{ csrf_field() }} 
            <div class="form-group col-md-6{{ $errors->has('current-password') ? ' has-error' : '' }}">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="fa fa-key text-purple"></span>
                    </div>
                    <input id="current-password" type="password" class="form-control" name="current-password" placeholder="Contraseña actual" required>

                    @if ($errors->has('current-password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('current-password') }}</strong>
                    </span>
                    @endif
                </div>
                <small id="current-password" class="form-text text-muted">Ingrese su contraseña actual.</small>
            </div>

            <div class="form-group col-md-6{{ $errors->has('current-password') ? ' has-error' : '' }}">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="fa fa-lock text-purple"></span>
                    </div>
                    <input id="new-password" type="password" class="form-control" name="new-password" placeholder="Nueva contraseña" required>                                
                    @if ($errors->has('new-password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('new-password') }}</strong>
                    </span>
                    @endif
                </div>
                <small id="current-password" class="form-text text-muted">Ingrese su nueva contraseña.</small>
            </div>
            <div class="form-group col-md-6{{ $errors->has('current-password') ? ' has-error' : '' }}">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="fa fa-unlock text-purple"></span>
                    </div>
                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" placeholder="Confirme nueva contraseña" required>
                </div>
                <small id="current-password" class="form-text text-muted">Confirme su nueva contraseña.</small>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn bg-purple btn-flat"><span class="fa fa-send"></span>
                    Enviar
                </button>
            </div>
        </form>

    </div>
</div>
@endsection