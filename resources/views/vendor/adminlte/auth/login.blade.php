@extends('adminlte::layouts.auth')
@section('htmlheader_title')
@endsection
@section('content')
<body class="hold-transition bg-purple">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                      <img src="/img/sistilog.png">
            </div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="login-box-body box">
                <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
                <form action="{{ url('/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button type="submit" class="btn bg-purple btn-block btn-flat"><span class="fa fa-sign-in"></span> {{ trans('adminlte_lang::message.buttonsign') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
</body>
@endsection